<?php

session_start();

$page = 'currentscience';
include "includes/header.php";
include "includes/navigation.php";

?>

<div class="container">


    <h1 class="py-2">About the Current Science Journal</h1>

    <div class="row py-3">
        <div class="col-lg-8">
            <p>Current Science, published every fortnight by the Association, in collaboration with the Indian
                Academy of Sciences, is the leading interdisciplinary science journal from India. It was started in
                1932 by the then stalwarts of Indian science such as CV Raman, Birbal Sahni, Meghnad Saha, Martin
                Foster and S.S. Bhatnagar. In 2011, the journal completed one hundred volumes. The journal is
                intended as a medium for communication and discussion of important issues that concern science and
                scientific activities. Besides full length research articles and shorter research communications,
                the journal publishes review articles, scientific correspondence and commentaries, news and views,
                comments on recently published research papers, opinions on scientific activity, articles on
                universities, Indian laboratories and institutions, interviews with scientists, personal
                information, book reviews, etc. It is also a forum to discuss issues and problems faced by science
                and scientists and an effective medium of interaction among scientists in the country and abroad.
                Current Science is read by a large community of scientists and the circulation has been continuously
                going up.</p>

            <p>Current Science publishes special sections on diverse and topical themes of interest and this has
                served as a platform for the scientific fraternity to get their work acknowledged and highlighted.
                Some of the special sections that have been well received in the recent past include remote sensing,
                waves and symmetry, seismology in India, nanomaterials, AIDS, Alzheimer's disease, molecular biology
                of ageing, cancer, cardiovascular diseases, Indian monsoon, water, transport, and mountain weather
                forecasting in India, to name a few. Contributions to these special issues ‘which receive widespread
                attention’ are from leading scientists in India and abroad.</p>

            <p>Current Science is indexed by Web of Science, Current Contents, Geobase, Chemical Abstracts, IndMed
                and Scopus. The Impact Factor of the journal for the year 2019 is 0.725.</p>


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

    <div class="row py-4">

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