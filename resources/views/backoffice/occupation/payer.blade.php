@extends('./layouts/backoffice/backofficeLayouts')
@section('titre', $occupation->exists ? 'modifier une occupation' : 'payer votre occupation' )
@section('page-content')
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Remplicez les informations de paiement</h3>
            </div>
        <form action="{{ route('occupation.payer',$occupation->ID_OCCUPATION) }}" method="post">
                {!! csrf_field() !!}
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Montant total</label>
                        <input  value="{{ $occupation->montat }} XAF" disabled class="form-control" id="exampleInputEmail1"  placeholder="Entré le nom du client">
                    </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label for="exampleInputEmail1">Montant payer</label>
                    <input  value="{{ $occupation->montatpayer }} XAF" disabled class="form-control" id="exampleInputEmail1"  placeholder="Entré le nom du client">
                </div>
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                        <div class="form-group">
                        <!-- /.form-group -->
                        <!-- Nombre de jours -->
                        <div class="form-group">
                            <label for="exampleInputEmail1">Reste à payer</label>
                            <input   disabled value="{{ $occupation->restepayer }} XAF" class="form-control"  id="exampleInputEmail1">
                        </div>
                             <!-- Nombre de jours -->
                            <div class="form-group">
                                <label for="exampleInputEmail1">payer</label>
                                <input name="payer" required type="number" class="form-control"  id="exampleInputEmail1" placeholder="Entré le numéro du client">
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
