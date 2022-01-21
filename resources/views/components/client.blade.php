<!-- start partners -->
<section class="partners-section">
    <h2 class="hidden">Partners</h2>
    <div class="container">
        <div class="row">
            <div class="col col-xs-12">
                <div class="partners-slider">
                    @foreach ($client as $client )
                    <div class="grid">
                        <img src="{!! Voyager::image ($client->logo) !!}" alt>

                        {{-- <P> {!! $client->perusahaan !!} </P> --}}
                    </div>
                    @endforeach
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end partners -->
