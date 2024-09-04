<x-master-layout>
    <div class="pt-3 px-3">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        @include('master.contents.allClientContent')
    </div>
</x-master-layout>
