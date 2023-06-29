<div class="container px-5 my-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
    </div>
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-11 col-xl-9 col-xxl-8">
            <!-- Experience Section-->
            <section>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h2 class="text-secondary fw-bolder mb-4"><span class="text-gradient d-inline">Experience</span></h2>
                    <a target="_blank" class="btn btn-primary px-4 py-3" id="cvDownloadLink" href=" ">
                        <div class="d-inline-block bi bi-download me-2"></div>
                        Download Resume
                    </a>
                </div>

                <!-- Experience Card 1-->
                <div id="experience-list" class="card shadow border-0 rounded-4 mb-5">

                </div>
            </section>
        </div>
    </div>
</div>
<script>
    getResumeLink();
    async function getResumeLink() {
        try {
            const URL = '/resumeLink';
            document.getElementById('loading-div').classList.remove('d-none');
            document.getElementById('content-div').classList.add('d-none');
            const response = await axios.get(URL);
            const link = response.data['downloadLink'];
            const cvDownloadLink = document.getElementById('cvDownloadLink').setAttribute('href', link);
        } catch (error) {
            alert('Something went wrong when trying to download the resume');
        }
    }



    getExperience();

    async function getExperience() {
        let URL = '/experiencesData'
        try {
            const response = await axios.get(URL);
            response.data.forEach((element) => {
                document.getElementById('experience-list').innerHTML += (`<div class="card-body p-5">
                                <div  class="row align-items-center gx-5">
                                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                        <div class="bg-light p-4 rounded-4">
                                            <div class="text-primary fw-bolder mb-2">${element['duration']} </div>
                                            <div class="small fw-bolder">${element['title']}</div>
                                            <div class="text-warning small">${element['designation']}</div>
                                            <div class="text-success small text-muted">${element['organizationName']}</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div>${element['details']}</div>
                                    </div>
                                </div>
                            </div>`)
            });
        } catch (error) {
            alert('something went wrong')
        }
    }
</script>
