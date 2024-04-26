@extends('./layouts/backoffice/backofficeLayouts')
@section('titre', 'Gestion des Reservation' )
@section('page-content')
<div class="card">
    <div class="card-header">
        <div class="">
                <a href="{{ route('reservation.creer') }}" class="btn btn-primary">ajouter une reservation</a>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Nom</th>
          <th>chambre</th>
          <th>Statut</th>
          <th>prix</th>
          <th>Durée</th>
          <th>Date début</th>
          <th>Date fin</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @forelse ( $reservations as $reservation)
            <tr>
                <td>{{ $reservation->user->NOM }}</td>
                <td>{{ $reservation->chambre->NOM_CHAMBRE }}</td>
                <td>
                    @if ($reservation->Statut == 'Atente')
                    <span class="badge bg-success">{{ $reservation->Statut }}</span>

                    @elseif ($reservation->Statut == 'Valider')
                    <span class="badge bg-primary">{{ $reservation->Statut }}</span>
                    @else
                    <span class="badge bg-danger">{{ $reservation->Statut }}</span>

                    @endif
                </td>
                <td>{{ $reservation->prix }} XAF</td>
                <td>{{ $reservation->Durer }} jours</td>

                <td>{{ \Carbon\Carbon::parse($reservation->DATE_DEBUT)->translatedFormat('d F Y à H\hi')}}</td>
                <td>{{ \Carbon\Carbon::parse($reservation->DATE_FIN)->translatedFormat('d F Y à H\hi')}}</td>
                <td>
                    @if ($reservation->Statut == 'annuler' || $reservation->Statut == 'Valider' )
                    <span class="badge bg-warning"> Aucune action possibles</span>
                    @else
                    <a href="{{ route('reservation.modifier',$reservation) }}" class="btn btn-primary">Modifier</a>
                    <a href="{{ route('reservation.suprimer',$reservation) }}" class="btn btn-danger">Supprimer</a>
                    <a href="{{ route('reservation.valider',$reservation) }}" class="btn btn-success">validé</a>
                    <a href="{{ route('reservation.annuler',$reservation) }}" class="btn btn-warning">Annuler</a>

                    @endif
                </td>
              </tr>

            @empty

            @endforelse
        </tbody>
        <tfoot>
        <tr>
            <th>Nom</th>
            <th>chambre</th>
            <th>Statut</th>
            <th>prix</th>
            <th>Durée</th>
            <th>Date début</th>
            <th>Date fin</th>
            <th>Action</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection
