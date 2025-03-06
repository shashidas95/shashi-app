<header class="py-5">
    <div class="container px-5 pb-5">
        <div class="row gx-5 align-items-center">
            <div class="col-xxl-5">
                <!-- Header text content      -->
                <div class="text-center text-xxl-start">
                    <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                        <div id="keyLine" class="text-uppercase">AUTOMATE &middot; SCALE &middot; SECURE</div>
                    </div>
                    <div id="title" class="fs-3 fw-light text-muted">I can help your infrastructure to</div>
                    <h1 id="short_title" class="display-3 fw-bolder mb-5 text-gradient d-inline">Deploy faster and run
                        smoother</h1>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder"
                            href="{{ url('/resume') }}">Resume</a>
                        <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder"
                            href="{{ url('/projects') }}">Projects</a>
                    </div>
                </div>
            </div>
            <div class="col-xxl-7">
                <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                    <div class="profile">
                        <img id="profileImg" class="profile-img" src="" alt="..." />
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<script>
    getHero();
    async function getHero() {
        try {
            let URL = '/heroData';
            const response = await axios.get(URL);
            document.getElementById('keyLine').innerHTML = response.data['keyLine'];
            document.getElementById('title').innerHTML = response.data['title'];
            document.getElementById('short_title').innerHTML = response.data['short_title'];
            // One way
            const profileImage = response.data['img'];
            document.getElementById('profileImg').setAttribute('src', profileImage);
            //another way
            // const profileImg = document.getElementById('profileImg');
            // profileImg.src = response.data['img'];

        } catch (error) {
            alert('Something went wrong')
        }
    }
</script>
