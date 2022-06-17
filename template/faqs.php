<div class="card-body">
            <h5 class="card-title">FAQS</h5>
                      <div class="accordion" id="accordionExample">
                        <div class="accordion-item bg-dark ">
                            <!-- inizio foreach -->
                          <h2 class="accordion-header" id="headingIDFAQS">
                            <button class="accordion-button collapsed  bg-dark text-white border-0 rounded-3" id="btnOrd" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIDFAQS" aria-expanded="true" aria-controls="collapseIDFAQS">
                            NOME FAQS
                              <span class='visually-hidden'> </span>
                              </span>
                            </button>
                          </h2>
                          <div id="collapseIDFAQS" class="accordion-collapse collapse " aria-labelledby="headingIDFAQS" data-bs-parent="#accordionExample">
                            <div class="accordion-body text-white">
                            <!-- qui va inserito il contenuto delle FAQS-->
                         
                        </div>
                        <p class="display-6 text-white mt-4">  <?php echo $msg ;?></p>
                            </div>
                          </div>
                        </div>
                        <!-- endforeach nel caso le volessi salvare su un server-->
                      </div>

          </div>