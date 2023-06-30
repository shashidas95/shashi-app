<!-- About Section-->
<section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <h2 id="about-title" class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span>
                    </h2>
                    <p id="about-details" class="lead fw-light mb-4">

                    </p>
                    <div class="d-flex justify-content-center fs-2 gap-4">
                        <a target="_blank" id="twitter" class="text-gradient" href=""><i
                                class="bi bi-twitter"></i></a>
                        <a target="_blank" id="linkedin" class="text-gradient" href=""><i
                                class="bi bi-linkedin"></i></a>
                        <a target="_blank" id="github"class="text-gradient" href=""><i
                                class="bi bi-github"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<script>
    getAboutDetails();
    async function getAboutDetails() {
        try {
            let URL = '/aboutData';
            document.getElementById('loading-div').classList.remove('d-none');
            document.getElementById('content-div').classList.add('d-none');
            debugger;
            const response = await axios.get(URL);
            document.getElementById('about-title').innerHTML = response.data['title'];
            document.getElementById('about-details').innerHTML = response.data['details'];

        } catch (error) {
            alert(error)
        }
    }
    getSocialLinks();
    async function getSocialLinks() {
        try {
            let URL = "/socialData";

            const response = await axios.get(URL);
            debugger;

            document.getElementById('loading-div').classList.add('d-none');
            document.getElementById('content-div').classList.remove('d-none');
            document.getElementById('twitter').href = response.data['twitterLink'];
            document.getElementById('linkedin').href = response.data['linkedinLink'];
            document.getElementById('github').href = response.data['githubLink'];
        } catch (error) {
            alert(error)
        }
    }
</script>
