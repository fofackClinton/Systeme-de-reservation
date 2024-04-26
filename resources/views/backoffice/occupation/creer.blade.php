@extends('./layouts/backoffice/backofficeLayouts')
@section('titre', $occupation->exists ? 'modifier une occupation' : 'creer une occupations' )
@section('page-content')
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Remplicez les informations du client</h3>
            </div>
        <form action="{{ $occupation->exists ? route('occupation.miseAjour',$occupation): route('occupation.enregistrer') }}" method="post">
            @method($occupation->exists ? 'put': 'post')
                {!! csrf_field() !!}
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nom du client</label>
                        <input type="text"  value="{{ $occupation->exists ? $occupation->user->NOM : '' }}"  class="form-control" id="exampleInputEmail1" name="nom" placeholder="Entré le nom du client">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Prénom</label>
                        <input type="text" value="{{ $occupation->exists ? $occupation->user->PRENOM : '' }}" class="form-control" name="prenom" id="exampleInputEmail1" placeholder="Entré le prénom du client">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Numéro de téléphone</label>
                        <input type="number" value="{{ $occupation->exists ? $occupation->user->TELEPHONE : '' }}" class="form-control" name="tel" id="exampleInputEmail1" placeholder="Entré le numéro du client">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">numéro de CNI</label>
                        <input type="text" value="{{ $occupation->exists ? $occupation->user->CNI : '' }}" class="form-control" id="exampleInputEmail1" name="cni" placeholder="Entré le numéro de CNI">
                    </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                        <div class="form-group">
                            <label>Chambre</label>
                            <select name="chambre" class="form-control select2bs4" style="width: 100%;">
                                <option value="{{ $occupation->exists ? $occupation->chambre->ID_CHAMBRE : '' }}" >{{ $occupation->exists ? $occupation->chambre->NOM_CHAMBRE : '' }}</option>
                                @forelse ($chambres as $chambre )
                                <option value="{{ $chambre->ID_CHAMBRE }}">{{ $chambre->NOM_CHAMBRE }}</option>
                                @empty

                                @endforelse

                            </select>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Type d'occupation</label>
                            <select name="type" class="form-control select2bs4" style="width: 100%;">
                                <option value="{{ $occupation->exists ? $occupation->Typeoccupation->ID_type : '' }}" >{{ $occupation->exists ? $occupation->Typeoccupation->libele: '' }}</option>
                                @forelse ($types as $type )
                                <option value="{{ $type->ID_type }}">{{ $type->libele }}</option>
                                @empty

                                @endforelse
                            </select>
                        </div>
                        <!-- /.form-group -->
                        <!-- Nombre de jours -->
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre de jours</label>
                            <input name="jours" type="number" value="{{ $occupation->exists ? $occupation->Durer : '' }}" class="form-control" name="tel" id="exampleInputEmail1" placeholder="Entré le numéro du client">
                        </div>
                             <!-- Nombre de jours -->
                            <div class="form-group">
                                <label for="exampleInputEmail1">payer</label>
                                <input name="montant" type="number" value="{{ $occupation->exists ? $occupation->montatpayer : '' }}" class="form-control" name="tel" id="exampleInputEmail1" placeholder="Entré le numéro du client">
                            </div>
                        </div>
            <button class="btn btn-primary">
                @if ($occupation->exists )
                    Modifier
                @else
                    Enregistrer
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
