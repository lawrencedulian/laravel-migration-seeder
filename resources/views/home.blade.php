@extends('layouts.app')

@section('content')
    <section>
        <section>
            <div class="container">
                <div class="row row-cols-2 g-3 d-flex justify-content-center mt-5">
                    @foreach ($trains as $train)
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        {{ $train->stazione_di_partenza }} -
                                        {{ $train->stazione_di_arrivo }}
                                    </h5>
                                    <h6 class="card-subtitle mb-2 text-muted">{{ $train->agenzia }}</h6>
                                    <p class="card-text">Orario partenza: {{ $train->orario_di_partenza }}</p>
                                    <p class="card-text">Orario arrivo: {{ $train->orario_di_arrivo }}</p>
                                    @if (!$train->is_on_time)
                                        <p class="card-text fs-3 text-warning">IN RITARDO</p>
                                    @endif
                                    @if ($train->is_cancelled)
                                        <p class="card-text fs-3 text-danger">CANCELLATO</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </section>
@endsection
