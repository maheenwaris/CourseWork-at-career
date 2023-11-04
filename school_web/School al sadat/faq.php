<?php
include_once 'navbar.php'
?>
<style>
.accordion a {
  position: relative;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
  width: 100%;
  padding: 1rem 3rem 1rem 1rem;
  color: #7288a2;
  font-size: 1.15rem;
  font-weight: 400;
  border-bottom: 1px solid blue;
}
.accordion a:hover,
.accordion a:hover::after {
  cursor: pointer;
  color: blue;
}
.accordion a:hover::after {
  border: 1px solid blue;
}
.accordion a.active {
  color: blue;
  border-bottom: 1px solid blue;
}
.accordion a::after {
  font-family: 'Ionicons';
  content: '\f218';
  position: absolute;
  float: right;
  right: 1rem;
  font-size: 1rem;
  color: blue;
  padding: 5px;
  width: 30px;
  height: 30px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  border: 1px solid blue;
  text-align: center;
}
.accordion a.active::after {
  font-family: 'Ionicons';
  content: '\f209';
  color: blue;
  border: 1px solid blue;
}
.accordion .content {
  opacity: 0;
  padding: 0 1rem;
  max-height: 0;
  border-bottom: 1px solid blue;
  overflow: hidden;
  clear: both;
  -webkit-transition: all 0.2s ease 0.15s;
  -o-transition: all 0.2s ease 0.15s;
  transition: all 0.2s ease 0.15s;
}
.accordion .content p {
  font-size: 1rem;
  font-weight: 300;
}
.accordion .content.active {
  opacity: 1;
  padding: 1rem;
  max-height: 100%;
  -webkit-transition: all 0.35s ease 0.15s;
  -o-transition: all 0.35s ease 0.15s;
  transition: all 0.35s ease 0.15s;
}
</style>
<div class="container">

<h2>Frequently Asked Questions</h2>

<div class="accordion">
  <div class="accordion-item">
    <a>What can JavaScript Do?</a>
    <div class="content">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
    </div>
  </div>
  <div class="accordion-item">
    <a>How JavaScript Can Modify HTML and CSS Values?</a>
    <div class="content">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
    </div>
  </div>
  <div class="accordion-item">
    <a>What Is SVG?</a>
    <div class="content">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
    </div>
  </div>
  <div class="accordion-item">
    <a>Is FAQ Section Matters In Website?</a>
    <div class="content">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
    </div>
  </div>
  <div class="accordion-item">
    <a>How To Create a Light FAQ Element?</a>
    <div class="content">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
    </div>
  </div>
</div>

</div>

<script src='https://code.jquery.com/jquery-3.2.1.min.js'></script>

<script>
    const items = document.querySelectorAll(".accordion a");

function toggleAccordion(){
  this.classList.toggle('active');
  this.nextElementSibling.classList.toggle('active');
}

items.forEach(item => item.addEventListener('click', toggleAccordion));
</script>

<?php
include_once 'footer.php'
?>