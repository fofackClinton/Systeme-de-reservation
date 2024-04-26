@extends('./layouts/backoffice/backofficeLayouts')
@section('titre', 'Gestion des occupations' )
@section('page-content')
<div class="card">
    <div class="card-header">
        <div class="">
                <a href="{{ route('occupation.creer') }}" class="btn btn-primary">ajouter une occupation</a>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Chambres</th>
          <th>Client</th>
          <th>Durée</th>
          <th>Statut</th>
          <th>Montant total</th>
          <th>Montant payer</th>
          <th>Reste à payer</th>
          <th>Jour de début</th>
          <th>Jour de fin</th>
          <th>heure de début</th>
          <th>heure de fin</th>
          <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @forelse ( $occupation as $occ)
            <tr>
                <td>{{ $occ->chambre->NOM_CHAMBRE }}</td>
                <td>{{ $occ->user->NOM }}</td>
                <td>{{ $occ->Durer }} jours</td>
                <td>
                    @if ($occ->Statut == 'payer')
                        <span class="badge bg-success">{{ $occ->Statut  }}</span>
                    @else
                        <span class="badge bg-warning">{{ $occ->Statut  }}</span>
                    @endif
                </td>
                <td>{{ $occ->montat }} XAF</td>
                <td>{{ $occ->montatpayer }} XAF</td>
                <td>{{ $occ->restepayer }} XAF</td>
                <td>{{ $occ->DATE_DEBUT->format('D, d M Y ') }}</td>
                <td>{{ $occ->DATE_FIN->format('D, d M Y ')  }}</td>
                <td>{{ $occ->HEURE_DEBUT->format('D, h:i A') }}</td>
                <td>{{ $occ->HEURE_FIN->format('D, h:i A') }}</td>
                <td>
                    @if ($occ->Statut == 'payer')
                    <span class="badge bg-warning"> Aucune action possibles</span>
                    @else
                    <a href="{{ route('occupation.modifier',$occ) }}" class="btn btn-primary">Modifier</a>
                    <a href="{{ route('occupation.suprimer',$occ) }}" class="btn btn-danger">suprimer</a>
                    <a href="{{ route('occupation.paiement',$occ) }}" class="btn btn-success">payer</a>
                    @endif

                </td>
              </tr>

            @empty

            @endforelse
        </tbody>
        <tfoot>
        <tr>
            <th>Chambres</th>
            <th>Client</th>
            <th>Durée</th>
            <th>Statut</th>
            <th>Montant total</th>
            <th>Montant payer</th>
            <th>Reste à payer</th>
            <th>Jour de début</th>
            <th>Jour de fin</th>
            <th>heure de début</th>
            <th>heure de fin</th>
            <th>Actions</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection
