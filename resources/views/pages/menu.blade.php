<link rel="stylesheet" href=" {{ asset('sass/pages/menu/menu.css') }} ">

@extends('template')

@section('content')
    <main>
        <section class="aside-type">
            <aside>
                <h2>Filter</h2>
                <form action="javascript: void(0)">
                    @foreach ($types as $type)
                    <div class="filter-drink">
                        <input type="checkbox" name="{{ $type }}" id="chkbox-{{ $type }}">
                        <label for="{{ $type }}">{{ $type }}</label>
                    </div>
                    @endforeach
                </form>
            </aside>
            <div class="personal-brew">
                <a href="javascript: void(0)">
                    <p>Do you have a unique brew? Let us know!</p>
                </a>
            </div>
        </section>
        <section class="grid-container">
            <ul class="drink-list">
                <section class="drink-list-item" id="sp-section">
                    <div class="drink-list-item-title">
                        <h2>Special</h2>
                    </div>
                    <div class="drink-list-item-content">
                        @foreach($sp_drinks as $drink)
                        <li>
                            <div class="item-image">
                                <img src="{{ $drink->image }}" alt="Coffee List Item">
                            </div>
                            <div class="item-text">
                                <div class="item-text-np">
                                    <h3>{{ $drink->name }}</h3>
                                    <span>£{{ $drink->price }}</span>
                                </div>
                                <div class="item-text-desc">
                                    <p>{{ $drink->description }}</p>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </div>
                </section>
                <section class="drink-list-item" id="cl-section">
                    <div class="drink-list-item-title">
                        <h2>Classic</h2>
                    </div>
                    <div class="drink-list-item-content">
                        @foreach($cl_drinks as $drink)
                        <li>
                            <div class="item-image">
                                <img src="{{ $drink->image }}" alt="Coffee List Item">
                            </div>
                            <div class="item-text">
                                <div class="item-text-np">
                                    <h3>{{ $drink->name }}</h3>
                                    <span>£{{ $drink->price }}</span>
                                </div>
                                <div class="item-text-desc">
                                    <p>{{ $drink->description }}</p>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </div>
                </section>
                <section class="drink-list-item" id="co-section">
                    <div class="drink-list-item-title">
                        <h2>Cold</h2>
                    </div>
                    <div class="drink-list-item-content">
                        @foreach($co_drinks as $drink)
                        <li>
                            <div class="item-image">
                                <img src="{{ $drink->image }}" alt="Coffee List Item">
                            </div>
                            <div class="item-text">
                                <div class="item-text-np">
                                    <h3>{{ $drink->name }}</h3>
                                    <span>£{{ $drink->price }}</span>
                                </div>
                                <div class="item-text-desc">
                                    <p>{{ $drink->description }}</p>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </div>
                </section>
            </ul>
        </section>
    </main>

    <script src="{{ asset('js/filter.js') }}"></script>
@endsection