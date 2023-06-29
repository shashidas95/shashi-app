 <div class="container px-5 my-5">

     <div class="row gx-5 justify-content-center">
         <div class="col-lg-11 col-xl-9 col-xxl-8">
             <!-- Education Section-->
             <section>

                 <h2 class="text-secondary fw-bolder mb-4"><span class="text-gradient d-inline">Education</span></h2>
                 <!-- Education Card 1-->

                 <div id="education-list" class="card shadow border-0 rounded-4 mb-5">

                 </div>
             </section>
         </div>
     </div>
 </div>
 <script>

     getEducationList();
     async function getEducationList() {
         try {
             let URL = '/educationData';
             const response = await axios.get(URL);
             response.data.forEach((element) => {
                 document.getElementById('education-list').innerHTML += (` <div class="card-body p-5">
                         <div class="row align-items-center gx-5">
                             <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                 <div class="bg-light p-4 rounded-4">
                                     <div class="text-secondary fw-bolder mb-2">${element['duration']}</div>
                                     <div class="mb-2">
                                         <div class="small fw-bolder">${element['institutionName']}</div>

                                     </div>
                                     <div class="fst-italic">
                                         <div class="small text-warning">${element['field']}</div>

                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-8">
                                 <div>${element['details']}</div>
                             </div>
                         </div>
                     </div>`)
             });
         } catch (error) {
             alert('Something went wrong');
         }
     }
 </script>
