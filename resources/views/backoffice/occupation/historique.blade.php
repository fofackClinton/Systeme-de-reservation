@extends('./layouts/backoffice/backofficeLayouts')
@section('titre', 'historiques des occupations' )
@section('page-content')
<div class="card">
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
        </tr>
        </thead>
        <tbody>
            @forelse ( $occupation as $occ)
            <tr>
                <td>{{ $occ->chambre->NOM_CHAMBRE }}</td>
                <td>{{ $occ->user->NOM }}</td>
                <td>{{ $occ->Durer }} jours</td>
                <td>
                    @if ($occ->Statut == 'en cour')
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

        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection
