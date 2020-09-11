<?php

session_start();

$page = 'journals';
include "includes/header.php";
include "includes/navigation.php";

?>

<div class="container">

  <h1 class="py-2">Journals</h1>

  <div class="row py-3">
    <div class="col-lg-8">
      <p>A scientific journal is a periodical publication intended to further the progress of science, usually by
        reporting new research. Scientific journals represent the most vital means for disseminating research findings
        and are usually specialized for different academic disciplines or subdisciplines. The history of scientific
        journals dates from 1665, when the French Journal Des Sçavans and the English Philosophical Transactions of
        the Royal Society first began systematically publishing research results. Over a thousand, mostly ephemeral,
        were founded in the 18th century, and the number has increased rapidly after that.At present more than 33000
        journals are being published .</p>

      <p>Articles in scientific journals are mostly written by active scientists such as students, researchers and
        professors instead of professional journalists. There are thousands of scientific journals in publication, and
        many more have been published at various points in the past. Most journals are highly specialized, although
        some of the oldest journals such as Nature publish articles and scientific papers across a wide range of
        scientific fields. Scientific journals contain articles that have been peer reviewed, in an attempt to ensure
        that articles meet the journal's standards of quality, and scientific validity. Although scientific journals
        are superficially similar to professional magazines, they are actually quite different. Issues of a scientific
        journal are rarely read casually, as one would read a magazine. The publication of the results of research is
        an essential part of the scientific method. If they are describing experiments or calculations, they must
        supply enough details that an independent researcher could repeat the experiment or calculation to verify the
        results. Each such journal article becomes part of the permanent scientific record.</p>
    </div>
    <div class="col-lg-1">

    </div>
    <div class="col-lg-3">
      <div class="card col-md-12">
        <div class="card-body">
          <img src="img/artificialintelligence.jpg" alt="..." width="100" height="135">
          <p class="card-text">Artificial Intelligence</p>
          <a class="btn btn-primary" href="pdf/artificialintelligence.pdf" target="_blank">Download</a>
        </div>
      </div>
      <div class="card col-md-12">
        <div class="card-body">
          <img src="img/immunesystem.jpg" alt="..." width="100" height="135">
          <p class="card-text">Immune System</p>
          <a class="btn btn-primary" href="pdf/immunesystem.pdf" target="_blank">Download</a>
        </div>
      </div>
      <div class="card col-md-12">
        <div class="card-body">
          <img src="img/Weizmann innternational magazine no 15.png" alt="..." width="100" height="135">
          <p class="card-text">To The Moon</p>
          <a class="btn btn-primary" href="pdf/The Weizmann Internation magazine of Science and People no 15.pdf" target="_blank">Download</a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="card col-md-3 mb-3">
      <div class="card-body">
        <img src="https://www.ias.ac.in/public/images/stock/boms.jpg" alt="..." width="100" height="135">
        <p class="card-text">Bulletin of Materials Science</p>
      </div>
    </div>
    <div class="card col-md-3 mb-3">
      <div class="card-body">
        <img src="https://www.ias.ac.in/public/images/stock/joaa.jpg" alt="..." width="100" height="135">
        <p class="card-text">Journal of Astrophysics and Astronomy</p>
      </div>
    </div>
    <div class="card col-md-3 mb-3">
      <div class="card-body">
        <img src="https://www.ias.ac.in/public/images/stock/jbsc.jpg" alt="..." width="100" height="135">
        <p class="card-text">Journal of Biosciences</p>
      </div>
    </div>
    <div class="card col-md-3 mb-3">
      <div class="card-body">
        <img src="https://www.ias.ac.in/public/images/stock/jcsc.jpg" alt="..." width="100" height="135">
        <p class="card-text"><a href=https://www.ias.ac.in/listing/articles/jcsc/132/00 target="_blank">Journal of
            Chemical Sciences</a></p>
      </div>
    </div>
  </div>

</div>
</div>

<?php
include "includes/footer.php";
?>