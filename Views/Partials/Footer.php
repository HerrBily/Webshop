<footer>
        <section class="footer_section">
            <a href="#">
                <img src="<?php echo $base ?>/assets/img/Gintastic_white.png" class="f_logo">
            </a>
            <ul class="footer_list">
                <li>
                    <a href="products" class="footer_link">Products</a>
                </li>
                <li>
                    <a href="#" class="footer_link">Combination</a>
                </li>
                <li>
                    <a href="#" class="footer_link">About Us</a>
                </li>
                <?php if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true): ?>
                    <li>
                        <a href="login" class="footer_link">Login</a>
                    </li>
                <?php endif; ?>
                <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
                <li>
                    <a href="<?php echo $base; ?>logout" class="footer_link">Logout</a>
                </li>
            <?php endif; ?>
            </ul>
            <section class="social_media_section">
                <p>Follow us</p>
                <ul>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 408.788 408.788" class="social_media">
                            <g fill="#fff">
                                <path
                                    d="M353.701 0H55.087C24.665 0 .002 24.662.002 55.085v298.616c0 30.423 24.662 55.085 55.085 55.085h147.275l.251-146.078h-37.951a8.954 8.954 0 0 1-8.954-8.92l-.182-47.087a8.955 8.955 0 0 1 8.955-8.989h37.882v-45.498c0-52.8 32.247-81.55 79.348-81.55h38.65a8.955 8.955 0 0 1 8.955 8.955v39.704a8.955 8.955 0 0 1-8.95 8.955l-23.719.011c-25.615 0-30.575 12.172-30.575 30.035v39.389h56.285c5.363 0 9.524 4.683 8.892 10.009l-5.581 47.087a8.955 8.955 0 0 1-8.892 7.901h-50.453l-.251 146.078h87.631c30.422 0 55.084-24.662 55.084-55.084V55.085C408.786 24.662 384.124 0 353.701 0z" />
                            </g>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" viewBox="0 0 90 90"
                            class="social_media">
                            <g fill="#fff">
                                <path
                                    d="M70.939 65.832H66l.023-2.869a2.329 2.329 0 0 1 2.326-2.318h.315a2.332 2.332 0 0 1 2.332 2.318l-.057 2.869zm-18.526-6.148c-1.253 0-2.278.842-2.278 1.873V75.51c0 1.029 1.025 1.869 2.278 1.869 1.258 0 2.284-.84 2.284-1.869V61.557c0-1.032-1.026-1.873-2.284-1.873zM82.5 51.879v26.544C82.5 84.79 76.979 90 70.23 90H19.771C13.02 90 7.5 84.79 7.5 78.423V51.879c0-6.367 5.52-11.578 12.271-11.578H70.23c6.749 0 12.27 5.211 12.27 11.578zM23.137 81.305l-.004-27.961 6.255.002v-4.143l-16.674-.025v4.073l5.205.015v28.039h5.218zm18.75-23.796h-5.215V72.44c0 2.16.131 3.24-.008 3.621-.424 1.158-2.33 2.388-3.073.125-.126-.396-.015-1.591-.017-3.643l-.021-15.034h-5.186l.016 14.798c.004 2.268-.051 3.959.018 4.729.127 1.357.082 2.939 1.341 3.843 2.346 1.69 6.843-.252 7.968-2.668l-.01 3.083 4.188.005-.001-23.79zM58.57 74.607l-.011-12.427c-.004-4.736-3.547-7.572-8.356-3.74l.021-9.239-5.209.008-.025 31.89 4.284-.062.39-1.986c5.473 5.021 8.914 1.58 8.906-4.444zm16.321-1.647l-3.91.021c-.002.155-.008.334-.01.529v2.182c0 1.168-.965 2.119-2.137 2.119h-.766c-1.174 0-2.139-.951-2.139-2.119v-5.739h8.954v-3.37c0-2.463-.063-4.925-.267-6.333-.641-4.454-6.893-5.161-10.051-2.881a5.887 5.887 0 0 0-2.188 2.945c-.444 1.281-.665 3.031-.665 5.254v7.41c.002 12.318 14.964 10.577 13.179-.018zM54.833 32.732a3.55 3.55 0 0 0 1.254 1.584c.56.394 1.276.592 2.134.592.752 0 1.418-.203 1.998-.622.578-.417 1.065-1.04 1.463-1.871l-.099 2.046h5.813V9.74H62.82v19.24a1.907 1.907 0 0 1-3.811 0V9.74h-4.776v16.674c0 2.124.039 3.54.102 4.258.065.713.229 1.397.498 2.06zM37.217 18.77c0-2.373.198-4.226.591-5.562.396-1.331 1.107-2.401 2.137-3.208 1.027-.811 2.342-1.217 3.941-1.217 1.345 0 2.497.264 3.459.781.967.52 1.713 1.195 2.23 2.028a8 8 0 0 1 1.076 2.574c.195.891.291 2.235.291 4.048v6.252c0 2.293-.092 3.98-.271 5.051a8.006 8.006 0 0 1-1.146 3.004c-.58.924-1.329 1.615-2.237 2.056-.918.445-1.968.663-3.154.663-1.325 0-2.441-.183-3.361-.565-.923-.38-1.636-.953-2.144-1.714-.513-.762-.874-1.69-1.092-2.772-.219-1.081-.323-2.707-.323-4.874l.003-6.545zm4.553 9.82c0 1.4 1.042 2.543 2.311 2.543 1.27 0 2.308-1.143 2.308-2.543V15.43c0-1.398-1.038-2.541-2.308-2.541-1.269 0-2.311 1.143-2.311 2.541v13.16zm-16.088 6.645h5.484l.006-18.96L37.652.033h-5.998l-3.445 12.064L24.715 0h-5.936l6.894 16.284.009 18.951z" />
                            </g>
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="social_media">
                            <g fill="#fff">
                                <path
                                    d="M352 0H160C71.648 0 0 71.648 0 160v192c0 88.352 71.648 160 160 160h192c88.352 0 160-71.648 160-160V160C512 71.648 440.352 0 352 0zm112 352c0 61.76-50.24 112-112 112H160c-61.76 0-112-50.24-112-112V160C48 98.24 98.24 48 160 48h192c61.76 0 112 50.24 112 112v192z" />
                                <path
                                    d="M256 128c-70.688 0-128 57.312-128 128s57.312 128 128 128 128-57.312 128-128-57.312-128-128-128zm0 208c-44.096 0-80-35.904-80-80 0-44.128 35.904-80 80-80s80 35.872 80 80c0 44.096-35.904 80-80 80z" />
                                <circle cx="393.6" cy="118.4" r="17.056" />
                            </g>
                        </svg>
                    </li>
                </ul>
            </section>
        </section>
    </footer>
</body>
</html>