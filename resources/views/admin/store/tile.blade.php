@foreach ($rows as $item)
    <x-col-3>
        <x-card class="h-100">
            <x-card-before>
                <img class="card-img-top" src="/images/{{$item->image}}" alt="{{$item->title}}">
            </x-card-before>

            <x-card-header>
                <div class="card-title h5">{!! $popupEdit($item, $item->title) !!}</div>
                <p class="card-text">This is a longer card with supporting text below as a
                    natural lead-in to additional content. This content is a little bit longer.
                </p>



            </x-card-header>

            <x-card-body>
                <table class="table table-sm">
                    <tr>
                        <th width="150px">코드</th>
                        <td>{{$item->code}}</td>
                    </tr>
                </table>
            </x-card-body>
            <x-card-footer>
                <x-flex-between>
                    <div>
                        <p class="card-text">
                            <small class="text-muted">{{$item->created_at}}</small>
                        </p>
                    </div>
                    <div>
                        <x-button primary wire:click="$emit('install','{{$item->code}}')">설치</x-button>
                    </div>
                </x-flex-between>
            </x-card-footer>
        </x-card>
    </x-col-3>
@endforeach

@if(empty($rows))
<div>
    목록이 없습니다.
</div>
@endif


