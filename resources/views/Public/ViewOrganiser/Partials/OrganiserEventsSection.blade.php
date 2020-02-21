<section id="events" class="container">
    <h1>Gli eventi di {{{$organiser->name}}}</h1>
    <div class="row">
        <div class="col-md-12">
            @include('Public.ViewOrganiser.Partials.EventListingPanel',
                [
                    'panel_title' => trans("Public_ViewOrganiser.upcoming_events"),
                    'events'      => $upcoming_events
                ]
            )
            @include('Public.ViewOrganiser.Partials.EventListingPanel',
                [
                    'panel_title' => trans("Public_ViewOrganiser.past_events"),
                    'events'      => $past_events
                ]
            )
        </div>
    </div>
</section>