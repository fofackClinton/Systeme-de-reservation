@extends('./layouts/backoffice/backofficeLayouts')
@section('titre', $utilisateur->exists ? 'modifier une occupation' : 'creer un utilisateur' )
@section('page-content')
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Remplicez les informations l'utilisateur</h3>
            </div>
        <form action="{{ $utilisateur->exists ? route('utilisateur.miseAjour',$utilisateur): route('utilisateur.enregistrer') }}" method="post">
            @method($utilisateur->exists ? 'put': 'post')
                {!! csrf_field() !!}
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nom du client</label>
                        <input type="text"  value="{{ $utilisateur->exists ? $utilisateur->user->NOM : '' }}" required class="form-control" id="exampleInputEmail1" name="nom" placeholder="Entré le nom ">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Prénom</label>
                        <input type="text" value="{{ $utilisateur->exists ? $utilisateur->PRENOM : '' }}" required class="form-control" name="prenom" id="exampleInputEmail1" placeholder="Entré le prénom ">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Numéro de téléphone</label>
                        <input type="number" value="{{ $utilisateur->exists ? $utilisateur->TELEPHONE : '' }}" required class="form-control" name="tel" id="exampleInputEmail1" placeholder="Entré le numéro de téléphone">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">numéro de CNI</label>
                        <input type="text" value="{{ $utilisateur->exists ? $utilisateur->CNI : '' }}" required class="form-control" id="exampleInputEmail1" name="cni" placeholder="Entré le numéro de CNI">
                    </div>
                  <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Role</label>
                        <select name="role" class="form-control select2bs4" style="width: 100%;">
                            @forelse ($role as $rol )
                            <option value="{{ $rol->ID_ROLE}}">{{ $rol->NOM_ROLE}}</option>
                            @empty

                            @endforelse

                        </select>
                         <!-- /.form-group -->
                        <div class="form-group">
                            <label>email</label>
                            <input name="email" type="email" class="form-control" name="tel" required id="exampleInputEmail1" placeholder="Entré l'adress mail">
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Mot de passe</label>
                            <input name="password" type="text" class="form-control" name="tel" required id="exampleInputEmail1" placeholder="Entré le mot de passe">
                        </div>
                        <!-- /.form-group -->
                        <!-- Nombre de jours -->
                        <div class="form-group">
                            <label for="exampleInputEmail1">Confirmer le mot de passe</label>
                            <input name="jours" type="text" class="form-control" name="tel" required id="exampleInputEmail1" placeholder="Entré le mot de passe">
                        </div>
                        </div>
            <button class="btn btn-primary">
                @if ($utilisateur->exists )
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
