<footer>
<div class="fd-footer-style">
        <div class="container">
            <div>
                <button class="fd-button">SIGN-UP NOW!</button>
            </div>
            <div class="fd-style">
                <ul class="d-flex align-items-center justify-content-center gap-3 list-unstyled">
                    <h2>FOLLOW US</h2>
                    <li v-for="(item, index) in arrayFontAwesome" :key="index">
                        <a :href="item.url"><i class="fs-3" :class="item.name"></i></a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</footer>