<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if ($errors->has('role'))
                        <div class="alert alert-danger" role="alert">
                            {{ $errors->first('role') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                        @if(Bouncer::is(Auth::user())->an('admin'))
                            <x-dropdown-link :href="route('admin.create_headmaster')">
                                {{ __('Kreiraj direktora') }}
                            </x-dropdown-link>
                        @endif
{{--                        @if(Bouncer::is(Auth::user())->an('headmaster'))--}}
{{--                            <x-dropdown-link :href="route('admin.create_proffesor')">--}}
{{--                                {{ __('Kreiraj profesora') }}--}}
{{--                            </x-dropdown-link>--}}
{{--                        @endif--}}
                        @if(Bouncer::is(Auth::user())->an('professor'))
                            <x-dropdown-link :href="route('professor.create_student')">
                                {{ __('Kreiraj studenta') }}
                            </x-dropdown-link>
                        @endif
{{--                        @if(Bouncer::is(Auth::user())->an('student'))--}}

{{--                        @endif--}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
