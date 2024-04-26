@extends('./layouts/backoffice/backofficeLayouts')
@section('titre', $chambre->exists ? 'modifier une chambre' : 'creer une chambre' )
@section('page-content')
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Remplicez les informations de la chambre</h3>
            </div>
        <form action="{{ $chambre->exists ? route('chambre.miseAjour',$chambre): route('chambre.enregistrer') }}" method="post" enctype="multipart/form-data">
            @method($chambre->exists ? 'put': 'post')
                {!! csrf_field() !!}
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nom de la chambre</label>
                        <input type="text"  value="{{ $chambre->exists ? $chambre->NOM_CHAMBRE : '' }}"  class="form-control" id="exampleInputEmail1" name="NOM_CHAMBRE" placeholder="Entré le nombre de lits">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">type de chambre</label>
                        <select name="TYPE_CHAMBRE" class="form-control select2bs4" style="width: 100%;">
                            <option value="{{ $chambre->exists ? $chambre->TYPE_CHAMBRE : '' }}" >{{ $chambre->exists ? $chambre->TYPE_CHAMBRE : '' }}</option>
                            <option value="ventiler" >ventiler</option>
                            <option value="climatiser" >climatiser</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre de lits</label>
                        <input type="number" value="{{ $chambre->exists ? $chambre->NOMBRE_LITS : '' }}" class="form-control" name="NOMBRE_LITS" id="exampleInputEmail1" placeholder="Entré le numéro du client">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Télévision</label>
                        <select name="TELEVISION" class="form-control select2bs4" style="width: 100%;">
                            <option value="{{ $chambre->exists ? $chambre->TELEVISION : '' }}" >{{ $chambre->exists ? $chambre->TYPE_CHAMBRE : '' }}</option>
                            <option value="1" >Oui</option>
                            <option value="0" >Non</option>
                        </select>
                    </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="DESCRIPTION" class="form-control" rows="3" placeholder="Entrer la description de la chambre ..."></textarea>
                        </div>
                        <!-- /.form-group -->
                        <!-- Nombre de jours -->
                        <div class="form-group">
                            <label for="exampleInputEmail1">PRIX</label>
                            <input name="PRIX" type="number" value="{{ $chambre->exists ? $chambre->PRIX : '' }}" class="form-control" name="PRIX" id="exampleInputEmail1" placeholder="Entré le prix de la chambre">
                        </div>
                        <div class="form-group">
                            <label for="customFile">Images</label>

                            <div class="custom-file">
                              <input type="file" name="image" class="custom-file-input" id="customFile">
                              <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                 </div>
            <button class="btn btn-primary">
                @if ($chambre->exists )
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
