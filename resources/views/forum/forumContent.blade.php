<x-navigation></x-navigation>

@foreach ($content->getThreadContent() as $entry)
    <div class="container mt-5 border">
        <div class="row">
            <h4>{{ $entry->getCreatorName() }}</h4>
            <p>{{ $entry->created_at }}</p>
        </div>
        <div class="row">
            <p>{{ $entry->content }}</p>
        </div>
        <div class="row d-flex">
            <p class="col-md-auto">
                <span class="badge rounded-pill text-bg-secondary">
                    <i class="fa-solid fa-comment"></i> {{ $entry->likes }}
                </span>
                <span class="badge rounded-pill text-bg-secondary" style="cursor: pointer;">
                    <i class="fa-solid fa-up-long"></i>
                </span>
                <span class="badge rounded-pill text-bg-secondary" style="cursor: pointer;">
                    <i class="fa-solid fa-down-long"></i>
                </span>
            </p>

        </div>
    </div>
@endforeach

<x-footer></x-footer>