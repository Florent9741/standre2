@extends('vendor.template')
 
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
@endsection
 
@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-center">Modification d'un film</h1>
            <hr>
            <form class="mt-5" method="post" action="{{ route('update', ['id_film']) }}"
            enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                <div class="form-group">
                    <label for="nom">nom : </label>
                    <div class="col-sm-9">
                        <input type="text" name="nom" id="nom">
                        <small class="help-block"></small>
                    </div>
                </div>
                <div class="alert alert-danger hidden" role="alert">Il y a une erreur de saisie de plage horaire, veuillez vérifier !
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>

                </div>
             
                @foreach($days as $day)
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                {{ $day->name }}                         
                                <button type="button" id="{{ $day->id }}" class="btn btn-info btn-xs pull-right add_plage">Ajouter une plage horaire</button>
                            </h3>
                        </div>
                        <div class="panel-body">
                            @foreach($day->films as $film)
                                <div class="ligne">
                                    <div class="row form-group">
                                        <div class="col-sm-10"> 
                                            <label for="{{ 'start' . $index }}" class="col-sm-4 control-label">Heure de début :</label>
                                            <div class="col-sm-8 input-group date">
                                                <input required class="form-control" name="start" id ="{{ 'start_' . $index++ }}" type="text" value="{{ $film->pivot->start_time }}">
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-time"></span>
                                                </span>   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-10"> 
                                            <label for="{{ 'end_' . $index }}" class="col-sm-4 control-label">Heure de fin :</label>
                                            <div class="col-sm-8 input-group date">
                                                <input required class="form-control" name="end" id ="{{ 'end_' . $index++ }}" type="text" value="{{ $film->pivot->end_time }}">
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-time"></span>
                                                </span>
                                            </div>
                                        </div>                                            
                                        <div class="col-sm-2">
                                            <button type="button" class="btn btn-danger">Supprimer</button>
                                            @include('horaires.delete')
                                        </div>    
                                    </div>    
                                </div>                        
                            @endforeach
                        </div>
                    </div>
                @endforeach
                <button type="submit" class="btn btn-primary">Supprimer</button>
                </div>
            </form>
                </div>
        </div>
    </div>
@endsection
 
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.12.0/moment-with-locales.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bootstrap.datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    <script>
        $(function () {
            // Initialisation des DateTimePicker
            $('.date').datetimepicker({ locale: 'fr', format: 'LT' });
 
            // Initialisation index pour étiquettes
            var index = {{ $index }};
 
            // Suppression d'une ligne de réponse (utilisation de "on" pour gérer les boutons créés dynamiquement)
            $(document).on('click', '.btn-danger', function(){
                $(this).parents('.ligne').remove(); 
            });
 
            // Ajout d'une ligne de plage horaire
            $('.add_plage').click(function() {
                var html = '<div class="ligne">\n'
                + '<div class="row form-group">\n'
                + '<div class="col-sm-10">\n' 
                + '<label for="start' + index++ + '" class="col-sm-4 control-label">Heure de début :</label>\n'
                + '<div class="col-sm-8 input-group date">\n'
                + '<input class="form-control" name="start[' + $(this).attr("id") + '][]" id ="' + index++ + '" type="text">\n'
                + '<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>\n'
                + '</div></div></div>\n'
                + '<div class="row form-group">\n'
                + '<div class="col-sm-10">\n' 
                + '<label for="end' + index++ + '" class="col-sm-4 control-label">Heure de fin :</label>\n'
                + '<div class="col-sm-8 input-group date">\n'
                + '<input class="form-control" name="end[' + $(this).attr("id") + '][]" id ="' + index++ + '" type="text">\n'
                + '<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>\n'
                + '</div></div>\n'
                + '<div class="col-sm-2"><button type="button" class="btn btn-danger">Supprimer</button></div></div>\n'
                + '</div>\n';
                $(this).parents('.panel').find('.panel-body').append(html); 
                $('.date').datetimepicker({ locale: 'fr', format: 'LT' });
            });
 
            // Soumission 
            $(document).on('submit', 'form', function(e) { 
               
                e.preventDefault();
                $.ajax({
                   
                    method: $(this).attr('method'),
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    dataType: "json"
                })

                .done(function(data) {
                   
                    window.location.href = '{!! url('film') !!}';
                })
                .fail(function(data) {
                    var obj = data.responseJSON;
                    // Nettoyage préliminaire                   
                    $('.help-block').text('');
                    $('.form-group').removeClass('has-error');  
                    $('.alert').addClass('hidden');                 
                    // Balayage de l'objet
                    $.each(data.responseJSON, function (key, value) {
                        // Traitement du nom
                        if(key == 'name') {
                            $('.help-block').eq(0).text(value);
                            $('.form-group').eq(0).addClass('has-error');                           
                        }
                        // Traitement des erreurs des plages horaires
                        else {
                            console.log('erreur');
                            $('.alert').removeClass('hidden');                              
                        }
                    });
                });
            });
        });
    </script>
@endsection