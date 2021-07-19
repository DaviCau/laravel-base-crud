<footer>
    <div class="footer-top" style="background-image: url('{{ asset("img/footer-bg.jpg") }}')">
        <div class="container footer-container">
            {{-- <div class="links">
                <ul v-for="(section, index) in footerLinks" :key="index">
                    <li class="list-title">{{section.sectionTitle}}</li>
                    <li v-for="(link, indexLink) in footerLinks[index].sectionLinks" :key="indexLink">
                        <a :href="link.url">{{link.text}}</a>
                    </li>
                </ul>
            </div> --}}
            <div class="logo-bg">
                <img src="{{ asset("img/dc-logo-bg.png") }}" alt="logo dc">
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container footer-container">
            <div class="sign-up">
                <button>Sign-up now&excl;</button>
            </div>
            <div class="socials">
                <ul class="social-links">
                    <li class="list-title">Follow Us</li>
                    <li>
                        <a href="#">
                            <img src="{{ asset("img/footer-facebook.png") }}" alt="facebook">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset("img/footer-twitter.png") }}" alt="twitter">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset("img/footer-youtube.png") }}" alt="youtube">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset("img/footer-pinterest.png") }}" alt="pinterest">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="{{ asset("img/footer-periscope.png") }}" alt="periscope">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>