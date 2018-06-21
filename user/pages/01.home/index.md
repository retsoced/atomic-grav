---
title: Home
longTitle: Design Principles

taxonomy:
  category: [home]
  tag:

content:
  items:
    - '@self.children'

twig_first: true
process:
  twig: true

body_classes: "overview summary"
showSidebar: false
isIndex: true

---

<div id="pattern" class="overview top-level-category">
  <header class="welcome-message">
    <h1 class="category-title">Welcome to the Design Library</h1>
    <p class="introduction">A pattern is a concrete solution for a designer to sketch, an engineer to build and is easy to understand. The Pattern Library collects all of these designs into a centralized location to create an interactive style guide which acts as a reference point for team members to find detailed specifications for how PE interacts with users</p>
  </header>

  <section class="interfaces row full-width no-pad" data-equalizer>
    <article class="interface-block medium-4 large-4 columns" data-equalizer-watch>
      <h2>Graphical user interface</h2>
      <p class="description">GUI design focuses on creating engaging graphical interfaces based on research and findings illustrating how users and technology communicate.</p>
      <menu class="categories">
        <a href="/gui/patterns" class="button" title="Patterns">Patterns</a>
        <a href="/gui/styling" class="button" title="Styling">Styling</a>
      </menu>
    </article>
    
    <article class="interface-block medium-4 large-4 columns" data-equalizer-watch>
      <h2>Command line interface</h2>
      <p class="description">CLI design focuses on text based interfaces and defines user interactions through minimal graphics, syntax, color and patterns associated with a CLI.</p>
      <menu class="categories">
        <a href="/cli/patterns" class="button" title="Patterns">Patterns</a>
        <a href="/cli/styling" class="button" title="Styling">Styling</a>
      </menu>
    </article>
    
    <article class="interface-block medium-4 large-4 columns" data-equalizer-watch>
      <h2>Application programming interface</h2>
      <p class="description">API design focuses on creating a coded pattern and logical path for communicating directly with services and applications.</p>
      <menu class="categories">
        <a href="/api/patterns" class="button" title="Patterns">Patterns</a>
        <a href="/api/styling" class="button" title="Styling">Styling</a>
      </menu>
    </article>
  </section>
  
  <section class="principles row no-pad full-width back-red" data-background="back-red">
    <header class="row">
      <h4>Principles of good design</h4>
    </header>
    <article class="row">
      <div id="design-principles" class="owl-carousel owl-theme small-8 medium-8 large-8 columns" role="region" aria-label="Design Principles">

        <div class="item card">
          <h3>There are no small details</h3>
          <p>Details make the product; any product is a sum of its details. When you compromise on detail you are hurting the product.</p>
        </div>

        <div class="item card">
          <h3>Keep a consistent visual language</h3>
          <p>Things that look the same should work the same; things that work the same should look the same. Things that do not work the same way should look very different.</p>
        </div>
      </li>

        <div class="item card">
          <h3>Show rather than tell</h3>
          <p>Construct and expose a sensible mental model of the the underlying system state. Changes should be reflected in context. Elements with multiple states require a look-and-feel unique to that state.</p>
        </div>

        <div class="item card">
          <h3>Prefer visualization to interaction</h3>
          <p>Design for scale first. Do not hide functional elements or oversimplify presentation—clearly show what actions are available and visualize data well. Provide affordances and follow patterns for concealed actions.</p>
        </div>

        <div class="item card">
          <h3>Design in context</h3>
          <p>We live in a heterogeneous world with many human-computer interaction systems. Each has its own design conventions. Follow them by default; bend them infrequently and carefully. Design software consistent with its environment.</p>
        </div>

        <div class="item card">
          <h3>Design defensively and fail gracefully</h3>
          <p>Anticipate non-ideal states. Assume errors will occur. Notify appropriately and provide remediation steps. Remember choices that users make. Confirm significant changes to the system.</p>
        </div>

        <div class="item card">
          <h3>Design universally</h3>
          <p>Usability, accessibility, internationalization and localization must always be addressed. Seemingly subtle things like color contrast and idiomatic text can be barriers. Be mindful of cultural appropriateness when working with color, imagery and iconography.</p>
        </div>

        <div class="item card">
          <h3>Write well</h3>
          <p>Terms for elements and phrases for instruction should be consistent throughout the experience, and remain so across functional boundaries. Scrupulously follow writing guidelines. Never make exceptions for error cases.</p>
        </div>

        <div class="item card">
          <h3>Prefer typography</h3>
          <p>Information hierarchy should be expressly conveyed through thoughtful type treatment. Color should be used for reinforcement, ditto for iconography.</p>
        </div>
      </div>
      <div class="small-2 medium-2 large-2 columns"></div>  
    </article>
  </section>
</div>

<script>
  $(document).ready(function() {
    $("#design-principles").owlCarousel({

    navigation : true,
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem : true,
    beforeMove : moved

    });
    
    function moved() {
      var $bgColor = $( '.principles' ).data( 'background' );
      
      if ($bgColor == 'back-red') {
        $( '.principles' ).data( 'background', 'back-blue' );
        $( '.principles' ).removeClass( 'back-red' ).addClass( 'back-blue' );
      } else if ($bgColor == 'back-blue') {
        $( '.principles' ).data( 'background', 'back-teal' );
        $( '.principles' ).removeClass( 'back-blue' ).addClass( 'back-teal' );
      } else {
        $( '.principles' ).data( 'background', 'back-red' );
        $( '.principles' ).removeClass( 'back-teal' ).addClass( 'back-red' );
      }
    }
  });
</script>
