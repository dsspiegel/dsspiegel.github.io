<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html">
    <title>Research (Longer)</title>
    <link rel="stylesheet" type="text/css" href="style.css" >
  </head>
  <body>
    <div id="main">
      <h2>Research</h2>

<?include("menu.html")?> <!-- with php -->

      <h3><b>Areas of study:</b></h3>

      <br>
      <a name="Dynamics"><b>IAS15: An Optimal N-Body Integrator</b></a><br>
      <p>The oldest problem in computational astrophysics is calculating orbits.
Where will Mars be in 100 million years?
Will an asteroid that was just discovered collide with the Earth in 2037?
And so on.
	People have worked on how to numerically integrate the ordinary differential equations (ODEs) associated with trajectories under the influence of a force (solving Newton's law (<b>F</b> = m <b>a</b>) for as long as there have been digital computers.
	These codes are often called N-body integrators, and a germ of an idea that a Hanno Rein and I had ultimately led to our developing arguably the best N-body integrator that will ever be written.</p>

      <p>Our integrator, dubbed "Implicit integrator with Adaptive time Steps, 15th order" or IAS15, works <i>with out-of-the-box settings and no fine-tuning of hyperparameters!</i> on all problems on which we have tested it (highly elliptical orbits, comets crossing Jupiter's orbit, 3-body evolution, the Solar System, Poynting-Robertson drag, etc.).
In all tests we ran, IAS15 is orders of magnitude more accurate than the other commonly-used integrators to which we compared it, in terms of preserving energy and angular momentum.
Moreover, it is not limited to being used only in drag-free scenarios, as symplectic integrators are.
Most significantly, IAS15's errors grow as a random walk (as sqrt[t]) even for a billion orbits, instead of linearly with time as the errors of all other integrators that we tested eventually grow.
	Its performance is so close to optimal that no one will ever write a significantly better integrator.</p>

      <p>Find the code, written in C99 with Python bindings, on <a href="https://github.com/hannorein/rebound" target="_blank"><b>Github</b></a> and check out our paper that describes the code, <a href="http://adsabs.harvard.edu/abs/2015MNRAS.446.1424R" target="_blank"><b>Rein & Spiegel 2015</b></a>!</p><br>


      <p align="right"><a href="http://adsabs.harvard.edu/abs/2013MNRAS.432..500N" target="_blank"><img src="imgs/fates.png" style="float: right"></a></p>
      <a name="RGHJs"><b>Red-giant hot Jupiters and their fates</b></a><br>
      <p>As stars age past the main sequence, their moments of inertia increase,	initially at roughly constant mass, which drives outward evolution of the inner "Darwin" tidal equilibrium fixed point (<a href="http://adsabs.harvard.edu/abs/2012arXiv1208.2276S" target="_blank"><b>Spiegel 2012</b></a>).  This can ultimately lead planets, brown dwarfs, and low-mass stars to plunge into the primary star, a process whose observational consequences I explored with <a href="http://adsabs.harvard.edu/abs/2012MNRAS.425.2778M" target="_blank"><b>Brian Metzger and Dimitrios Giannios (2012)</b></a>.  In a series of papers (<a href="http://adsabs.harvard.edu/abs/2013MNRAS.432..500N" target="_blank"><b>Nordhaus & Spiegel 2013</b></a>, <a href="http://adsabs.harvard.edu/abs/2012arXiv1208.2276S" target="_blank"><b>Spiegel 2012</b></a>, <a href="http://adsabs.harvard.edu/abs/2012MNRAS.424..519F" target="_blank"><b>Farihi et al. 2012</b></a>, <a href="http://adsabs.harvard.edu/abs/2010MNRAS.408..631N" target="_blank"><b>Nordhaus, Spiegel, et al. 2010</b></a>), collaborators and I have examined tidal interactions between low-mass companions to stars and their evolving, post-main-sequence host stars, and the implications of this evolution for the fates of the known planets.</p>

      <p>In addition to growing in physical extent, stars can become more than a thousandfold brighter during the red-giant and asymptotic-giant-branch phases.  As a result, formerly cool planets can become highly irradiated, which led Madhu Nikku and me to the realization that our own <a href="http://adsabs.harvard.edu/abs/2012ApJ...756..132S" target="_blank"><b>Jupiter will become a hot Jupiter (Spiegel & Madhusudhan 2012)</b></a> due to heating from the expanding, brightening Sun, when it's about twice its current age.  In this paper, we coined the term "Red-Giant Hot Jupiter," and about 20% of the known exoplanets will someday go through a Red-Giant Hot Jupiter phase.</p>

      <br>
      <p>
	<i>I've addressed a number of other topics in a range of areas of astrophysics.  Below is a selection of papers, organized thematically. A comprehensive list may be found in my <a href="CV/cv.pdf" target="_blank"><b>CV</b></a>.</i>
      </p>
      <br>
 
      <br>
      <a name="Evolution"><b>Evolution of interiors and atmospheres of jovian bodies</b></a><br>
<p>&bull; <a href="http://adsabs.harvard.edu/abs/2013ApJ...772...76S" target="_blank"><b>Spiegel & Burrows 2013</b></a>: "Thermal Processes Governing Hot-Jupiter Radii"</p>
<p>&bull; <a href="http://adsabs.harvard.edu/abs/2012ApJ...745..174S" target="_blank"><b>Spiegel & Burrows 2012</b></a>: "Spectral and Photometric Diagnostics of Giant Planet Formation Scenarios"</p>
<p>&bull; <a href="http://adsabs.harvard.edu/abs/2012SPIE.8446E..9CM" target="_blank"><b>McElwain et al. 2012</b></a>: "Scientific design of a high contrast integral field spectrograph for the Subaru Telescope"</p>
<p>&bull; <a href="http://adsabs.harvard.edu/abs/2011ApJ...727...57S" target="_blank"><b>Spiegel, Burrows, & Milsom 2011</b></a>: "The Deuterium-burning Mass Limit for Brown Dwarfs and Giant Planets"</p>
<p>&bull; <a href="http://adsabs.harvard.edu/abs/2010ApJ...713..751I" target="_blank"><b>Ibgui, Burrows, & Spiegel 2010</b></a>: "Tidal Heating Models for the Radii of the Inflated Transiting Giant Planets WASP-4b, WASP-6b, WASP-12b, WASP-15b, and TrES-4"</p>

      <br>
      <br>
      <a name="Characterization"><b>Atmospheric characterization of exoplanets</b></a><br>
<p>&bull; <a href="http://adsabs.harvard.edu/abs/2013arXiv1306.3221K" target="_blank"><b>Kipping, Spiegel, & Sasselov 2013</b></a>: "A simple, quantitative method to infer the minimum atmospheric height of small exoplanets"</p>
<p>&bull; <a href="http://adsabs.harvard.edu/abs/2012ApJ...747..116J" target="_blank"><b>Janson et al. 2012</b></a>: "Infrared Non-detection of Fomalhaut b: Implications for the Planet Interpretation"</p>
<p>&bull; <a href="http://adsabs.harvard.edu/abs/2011MNRAS.417L..88K" target="_blank"><b>Kipping & Spiegel 2011</b></a>: "Detection of visible light from the darkest world"</p>
<p>&bull; <a href="http://adsabs.harvard.edu/abs/2010ApJ...722..871S" target="_blank"><b>Spiegel & Burrows 2010</b></a>: "Atmosphere and Spectral Models of the Kepler-field Planets HAT-P-7b and TrES-2"</p>
<p>&bull; <a href="http://adsabs.harvard.edu/abs/2010ApJ...709..149S" target="_blank"><b>Spiegel et al. 2010</b></a>: "Models of Neptune-Mass Exoplanets: Emergent Fluxes and Albedos"</p>
<p>&bull; <a href="http://adsabs.harvard.edu/abs/2010ApJ...719..341B" target="_blank"><b>Burrows, Rauscher, Spiegel, & Menou 2010</b></a>: "Photometric and Spectral Signatures of Three-dimensional Models of Transiting Giant Exoplanets"</p>
<p>&bull; <a href="http://adsabs.harvard.edu/abs/2010ApJ...716L..36L" target="_blank"><b>Lopez-Morales et al. 2010</b></a>: "Day-side z'-band Emission and Eccentricity of WASP-12b"</p>
<p>&bull; <a href="http://adsabs.harvard.edu/abs/2009ApJ...699.1487S" target="_blank"><b>Spiegel, Silverio, & Burrows 2009</b></a>: "Can TiO Explain Thermal Inversions in the Upper Atmospheres of Irradiated Giant Planets?"</p>
<p>&bull; <a href="http://adsabs.harvard.edu/abs/2007ApJ...669.1324S" target="_blank"><b>Spiegel, Haiman, & Gaudi 2007</b></a>: "On Constraining a Transiting Exoplanet's Rotation Rate with Its Transit Spectrum"</p>
<p>&bull; <a href="http://adsabs.harvard.edu/abs/2005ApJ...628..478S" target="_blank"><b>Spiegel et al. 2005</b></a>: "Can We Probe the Atmospheric Composition of an Extrasolar Planet from Its Reflection Spectrum in a High-Magnification Microlensing Event?"</p>

      <br>
      <br>
      <a name="Astrobiology"><b>Astrobiology, origins of life, and habitability</b></a><br>
<p>&bull; <a href="http://adsabs.harvard.edu/abs/2012PNAS..109..395S" target="_blank"><b>Spiegel & Turner 2012</b></a>: "Bayesian analysis of the astrobiological implications of life's early emergence on Earth"</p>
<p>&bull; <a href="http://adsabs.harvard.edu/abs/2010ApJ...721.1308S" target="_blank"><b>Spiegel et al. 2010</b></a>: "Generalized Milankovitch Cycles and Long-Term Climatic Habitability"</p>
<p>&bull; <a href="http://adsabs.harvard.edu/abs/2010ApJ...721.1295D" target="_blank"><b>Dressing, Spiegel, et al. 2010</b></a>: "Habitable Climates: The Influence of Eccentricity"</p>
<p>&bull; <a href="http://adsabs.harvard.edu/abs/2009ApJ...691..596S" target="_blank"><b>Spiegel, Menou, & Scharf 2009</b></a>: "Habitable Climates: The Influence of Obliquity"</p>
<p>&bull; <a href="http://adsabs.harvard.edu/abs/2008ApJ...681.1609S" target="_blank"><b>Spiegel, Menou, & Scharf 2008</b></a>: "Habitable Climates"</p>

      <br>
      <br>
      <a name="Other"><b>High-energy astrophysics and cosmology</b></a><br>
<p>&bull; <a href="http://adsabs.harvard.edu/abs/2013MNRAS.431..621M" target="_blank"><b>Mesinger, Ferrara, & Spiegel 2013</b></a>: "Signatures of X-rays in the early Universe"</p>
<p>&bull; <a href="http://adsabs.harvard.edu/abs/2012MNRAS.425.2778M" target="_blank"><b>Metzger, Giannios, & Spiegel 2012</b></a>: "Optical and X-ray transients from planet-star mergers"</p>
<p>&bull; <a href="http://adsabs.harvard.edu/abs/2007ApJ...658..288S" target="_blank"><b>Spiegel, Paerels, & Scharf 2007</b></a>: "A Possible Dearth of Hot Gas in Galaxy Groups at Intermediate Redshift"</p>


<?include("footer.html")?> <!-- with php -->

    </div>

<!-- New Counter (research longer) -->
<!-- Start of StatCounter Code -->
<script type="text/javascript">
var sc_project=9212887; 
var sc_invisible=1; 
var sc_security="b30f7f93"; 
</script>
<script type="text/javascript" src="http://www.statcounter.com/counter/counter.js"></script>
<noscript>
  <div class="statcounter">
    <a title="drupal statistics" href="http://statcounter.com/drupal/" target="_blank"><img class="statcounter" src="http://c.statcounter.com/9212887/0/b30f7f93/1/" alt="drupal statistics">
    </a>
  </div>
</noscript>
<!-- End of StatCounter Code -->

  </body>
</html>
