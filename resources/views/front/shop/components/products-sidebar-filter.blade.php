
<form action="{{ request()->segment(2) == 'product' ? 'shop' : '' }}">
    <div class="filter-widget">
        <h4 class="fw-title">categories</h4>
        <ul class="filter-catagories">
            @foreach($categories as $category)
                <li><a href="shop/{{$category->name}}">{{$category->name}}</a></li>
            @endforeach

        </ul>
    </div>
    <div class="filter-widget">
        <h4 class="fw-title">Brand</h4>
        <div class="fw-brand-check">
            @foreach($brands as $brand)
                <div class="bc-item">
                    <label for="bc-{{$brand->id}}">
                        {{$brand->name}}
                        <input type="checkbox"
                               {{ ( request("brand")[$brand->id] ?? '') == 'on' ? 'checked' : ''}}
                               id="bc-{{$brand->id}}"
                               name="brand[{{$brand->id }}]"
                               onchange="this.form.submit();">
                        <span class="checkmark"></span>
                    </label>
                </div>
            @endforeach

        </div>
    </div>
    <div class="filter-widget">
        <h4 class="fw-title">Price</h4>
        <div class="filter-range-wrap">
            <div class="range-slider">
                <div class="price-input">
                    <input type="text" id="minamount" name="price_min">
                    <input type="text" id="maxamount" name="price_max">
                </div>
            </div>
            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                 data-min="10" data-max="999"
                 data-min-value="{{ str_replace('$', '', request('price_min')) }}"
                 data-max-value="{{ str_replace('$', '', request('price_max')) }}">
                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
            </div>
        </div>


        <button type="submit" class="filter-btn">Filter</button>
    </div>

    <div class="filter-widget">
        <h4 class="fw-title">Size</h4>
        <div class="fw-size-choose">
            <div class="sc-item">
                <input type="radio" id="1/10-size" name="size" value="1/10" onchange="this.form.submit();"
                    {{ request('size') == '1/10' ? 'checked' : '' }}>
                <label for="1/10-size" class="{{ request('size') == '1/10' ? 'active' : '' }}">1/10</label>
            </div>
            <div class="sc-item">
                <input type="radio" id="1/9-size" name="size" value="1/9" onchange="this.form.submit();"
                    {{ request('size') == '1/9' ? 'checked' : '' }}>
                <label for="1/9-size" class="{{ request('size') == '1/9' ? 'active' : '' }}">1/9</label>
            </div>
            <div class="sc-item">
                <input type="radio" id="1/8-size" name="size" value="1/8" onchange="this.form.submit();"
                    {{ request('size') == '1/8' ? 'checked' : '' }}>
                <label for="1/8-size" class="{{ request('size') == '1/8' ? 'active' : '' }}">1/8</label>
            </div>
            <div class="sc-item">
                <input type="radio" id="1/7-size" name="size" value="1/7" onchange="this.form.submit();"
                    {{ request('size') == '1/7' ? 'checked' : '' }}>
                <label for="1/7-size" class="{{ request('size') == '1/7' ? 'active' : '' }}">1/7</label>
            </div>
            <div class="sc-item">
                <input type="radio" id="1/6-size" name="size" value="1/6" onchange="this.form.submit();"
                    {{ request('size') == '1/6' ? 'checked' : '' }}>
                <label for="1/6-size" class="{{ request('size') == '1/6' ? 'active' : '' }}">1/6</label>
            </div>
            <div class="sc-item">
                <input type="radio" id="1/5-size" name="size" value="1/5" onchange="this.form.submit();"
                    {{ request('size') == '1/5' ? 'checked' : '' }}>
                <label for="1/5-size" class="{{ request('size') == '1/5' ? 'active' : '' }}">1/5</label>
            </div>
            <div class="sc-item">
                <input type="radio" id="1/4-size" name="size" value="1/4" onchange="this.form.submit();"
                    {{ request('size') == '1/4' ? 'checked' : '' }}>
                <label for="1/4-size" class="{{ request('size') == '1/4' ? 'active' : '' }}">1/4</label>
            </div>
            <div class="sc-item">
                <input type="radio" id="1/3-size" name="size" value="1/3" onchange="this.form.submit();"
                    {{ request('size') == '1/3' ? 'checked' : '' }}>
                <label for="1/3-size" class="{{ request('size') == '1/3' ? 'active' : '' }}">1/3</label>
            </div>
            <div class="sc-item">
                <input type="radio" id="1/2-size" name="size" value="1/2" onchange="this.form.submit();"
                    {{ request('size') == '1/2' ? 'checked' : '' }}>
                <label for="1/2-size" class="{{ request('size') == '1/2' ? 'active' : '' }}">1/2</label>
            </div>
            <div class="sc-item">
                <input type="radio" id="1/1-size" name="size" value="1/1" onchange="this.form.submit();"
                    {{ request('size') == '1/1' ? 'checked' : '' }}>
                <label for="1/1-size" class="{{ request('size') == '1/1' ? 'active' : '' }}">1/1</label>
            </div>
        </div>
    </div>
    <div class="filter-widget">
        <h4 class="fw-title">Tags</h4>
        <div class="fw-tags">
            <a href="#">Dragonball</a>
            <a href="#">Attack On Titan</a>
            <a href="#">Naruto</a>
            <a href="#">Onepiece</a>
            <a href="#">Bleach</a>
            <a href="#">Gundam</a>
            <a href="#">Kaiju</a>
            <a href="#">Fate/Grand Order</a>
            <a href="#">Legend Three Kingdoms</a>
            <a href="#">Other</a>
        </div>
    </div>
</form>
