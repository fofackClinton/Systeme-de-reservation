@extends('./layouts/backoffice/backofficeLayouts')
@section('titre', $reservation->exists ? 'modifier une réservation' : 'creer une réservation' )
@section('page-content')
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Remplicez les informations du client</h3>
            </div>
        <form action="{{ $reservation->exists ? route('reservation.miseAjour',$reservation): route('reservation.enregistrer') }}" method="post">
            @method($reservation->exists ? 'put': 'post')
                {!! csrf_field() !!}
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nom du client</label>
                        <input type="text"  value="{{ $reservation->exists ? $reservation->user->NOM : '' }}"  class="form-control" id="exampleInputEmail1" name="nom" placeholder="Entré le nom du client">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Prénom</label>
                        <input type="text" value="{{ $reservation->exists ? $reservation->user->PRENOM : '' }}" class="form-control" name="prenom" id="exampleInputEmail1" placeholder="Entré le prénom du client">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Numéro de téléphone</label>
                        <input type="number" value="{{ $reservation->exists ? $reservation->user->TELEPHONE : '' }}" class="form-control" name="tel" id="exampleInputEmail1" placeholder="Entré le numéro du client">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">numéro de CNI</label>
                        <input type="text" value="{{ $reservation->exists ? $reservation->user->CNI : '' }}" class="form-control" id="exampleInputEmail1" name="cni" placeholder="Entré le numéro de CNI">
                    </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                        <div class="form-group">
                            <label>Chambre</label>
                            <select name="chambre" class="form-control select2bs4" style="width: 100%;">
                                <option value="{{ $reservation->exists ? $reservation->chambre->ID_CHAMBRE : '' }}" >{{ $reservation->exists ? $reservation->chambre->NOM_CHAMBRE : '' }}</option>
                                @forelse ($chambres as $chambre )
                                <option value="{{ $chambre->ID_CHAMBRE }}">{{ $chambre->NOM_CHAMBRE }}</option>
                                @empty

                                @endforelse

                            </select>
                        </div>
                        <!-- Date -->
                        <div class="form-group">
                            <label>Date de début:</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="text" value="{{ $reservation->exists ? $reservation->DATE_DEBUT : '' }}" name="dateDebut" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre de jours</label>
                            <input name="jours" type="number" value="{{ $reservation->exists ? $reservation->Durer : '' }}" class="form-control" name="tel" id="exampleInputEmail1" placeholder="Entré le nombre de jours">
                        </div>

                </div>
            <button class="btn btn-primary">
                @if ($reservation->exists )
                    modifier
                @else
                    enregistrer
                @endif

            </button>
        </form>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.card -->

@endsection
