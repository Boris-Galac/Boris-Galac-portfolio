///// TYPING EFFECT

if (document.querySelector(".home-main")) {
  var typed = new Typed(".auto-type", {
    strings: ["UX/UI designer", "Web developer", "Graphic designer"],
    typeSpeed: 100,
    backSpeed: 40,
    loop: true,
  });
}

////// SCROLL TO TOP

window.addEventListener("scroll", (e) => {
  const scroollBtn = document.querySelector(".scroll-to-top-btn");
  if (window.scrollY > 100) scroollBtn.setAttribute("aria-hidden", "false");
  else scroollBtn.setAttribute("aria-hidden", "true");
  scroollBtn.addEventListener("click", (e) => {
    window.scroll({
      top: 0,
    });
  });
});

/////// OVERLAY

const searchBtn = document.querySelector(".top-bar__search");
const searchForm = document.querySelector(".search__form");
const overlay = document.querySelector(".overlay");

searchBtn.addEventListener("click", (e) => {
  if (overlay.getAttribute("aria-hidden") === "true") {
    overlay.setAttribute("aria-hidden", "false");
  }
  searchForm.setAttribute("aria-hidden", "false");
});

overlay.addEventListener("click", (e) => {
  overlay.setAttribute("aria-hidden", "true");
  searchForm.setAttribute("aria-hidden", "true");
});

/////// SKILLSET DESCRIPTION

const skillsetModalWindow = document.querySelector(".skillset-modal");
const skillsetCards = document.querySelectorAll(".skill-card img[title]");

function skillsetModal(card) {
  const cardTitle = card.getAttribute("title");
  const x = skillContent.find((ab) => ab.title === cardTitle);
  skillsetModalWindow.innerHTML = x.content;
}
skillsetCards.forEach((card) => {
  card.addEventListener("click", (e) => {
    if (overlay.getAttribute("aria-hidden") === "true") {
      overlay.setAttribute("aria-hidden", "false");
      skillsetModalWindow.setAttribute("aria-hidden", "false");
      skillsetModal(card);
    }
    overlay.addEventListener("click", (e) => {
      overlay.setAttribute("aria-hidden", "true");
      skillsetModalWindow.setAttribute("aria-hidden", "true");
      skillsetModalWindow.innerHTML = "";
    });
  });
});

const skillContent = [
  {
    title: "Html",
    content: `
    <h2 class='work--subheading mb-2' >HTML</h2>
    <p class='p-text'>👉 Proper Semantic tags HTML5</p>
    <p class='p-text'>👉 Core Accessibility tags and attributes</p>
    <p class='p-text'>👉 BEM convention of writing HTML (for better structure and readability)</p>
    <p class='p-text'>👉 Accessible Rich Internet Applications (ARIA) </p>
    <p class='p-text'>👉 Accent on the performance</p>
    `,
  },
  {
    title: "Css",
    content: `
    <h2 class='work--subheading mb-2'>CSS</h2>
    <p class='p-text'>👉 Specificity </p>
    <p class='p-text'>👉 Box Model </p>
      <p class='p-text'>👉 Sass</p>
      <p class='p-text'>👉 PostCSS</p>
      <p class='p-text'>👉 Flexbox</p>
      <p class='p-text'>👉 Grid</p>
      `,
  },
  {
    title: "JavaScript",
    content: `
    <h2 class='work--subheading mb-2'>JavaScript (ES6)</h2>
    <p class='p-text'>👉 Variables</p>
    <p class='p-text'>👉 Data Types</p>
      <p class='p-text'>👉 Arrays and Methods</p>
      <p class='p-text'>👉 Functions</p>
      <p class='p-text'>👉 Objects</p>
      <p class='p-text'>👉 DOM Manipulation</p>
      <p class='p-text'>👉 Web API, JSON, Ajax</p>
      `,
  },
  {
    title: "React JS",
    content: `
    <h2 class='work--subheading mb-2'>React JS</h2>
    <p class='p-text'>👉 Components</p>
    <p class='p-text'>👉 Virtual DOM</p>
      <p class='p-text'>👉 JSX</p>
      <p class='p-text'>👉 State</p>
      <p class='p-text'>👉 Props</p>
      <p class='p-text'>👉 React Router</p>
      `,
  },
  {
    title: "Adobe inDesign",
    content: `
    <h2 class='work--subheading mb-2'>Adobe InDesign</h2>
    <p class='p-text'>👉 Layout</p>
    <p class='p-text'>👉 Text and typography</p>
      <p class='p-text'>👉 Images and graphics</p>
      <p class='p-text'>👉 Color and swatches</p>
      <p class='p-text'>👉 Layers</p>
      <p class='p-text'>👉 Interactive elements</p>
      <p class='p-text'>👉 Printing and exporting</p>
      `,
  },
  {
    title: "Adobe Photoshop",
    content: `
    <h2 class='work--subheading mb-2'>Adobe Photoshop</h2>
    <p class='p-text'>👉 Layers</p>
    <p class='p-text'>👉 Tools and Panels</p>
      <p class='p-text'>👉 Image Editing</p>
      <p class='p-text'>👉 Color Management</p>
      <p class='p-text'>👉 Filters and Effects</p>
      <p class='p-text'>👉 Retouching</p>
      <p class='p-text'>👉 Color Matching</p>
      <p class='p-text'>👉 Photo Manipulation</p>
      <p class='p-text'>👉 Output and Exporting</p>
      `,
  },
  {
    title: "Adobe Illustrator",
    content: `
    <h2 class='work--subheading mb-2'>Adobe Illustrator</h2>
    <p class='p-text'>👉 Vector graphics</p>
    <p class='p-text'>👉 Artboards</p>
      <p class='p-text'>👉 Tools and Panels</p>
      <p class='p-text'>👉 Shapes and Paths (Pen tool)</p>
      <p class='p-text'>👉 Brushes</p>
      <p class='p-text'>👉 Effects and Filters</p>
      <p class='p-text'>👉 Color and Swatches</p>
      <p class='p-text'>👉 Layers</p>
      <p class='p-text'>👉 Output and Exporting</p>
      `,
  },
  {
    title: "Adobe Xd",
    content: `
    <h2 class='work--subheading mb-2'>Adobe Xd</h2>
    <p class='p-text'>👉 All Design Tools</p>
    <p class='p-text'>👉 Prototyping</p>
      <p class='p-text'>👉 Wireframing</p>
      <p class='p-text'>👉 Collaboration</p>
      <p class='p-text'>👉 Plugins</p>
      <p class='p-text'>👉 Responsive Design</p>
      <p class='p-text'>👉 Integration</p>
      <p class='p-text'>👉 Layers</p>
      <p class='p-text'>👉 Developer Handoff</p>
      `,
  },
  {
    title: "Figma",
    content: `
    <h2 class='work--subheading mb-2'>Figma</h2>
    <p class='p-text'>👉 Auto-layout</p>
    <p class='p-text'>👉 Variants</p>
      <p class='p-text'>👉 Constraints (Responsive design)</p>
      <p class='p-text'>👉 Wireframing</p>
      <p class='p-text'>👉 Interactive components</p>
      <p class='p-text'>👉 Plugins</p>
      <p class='p-text'>👉 Design systems</p>
      <p class='p-text'>👉 Collaboration</p>
      <p class='p-text'>👉 Prototyping</p>
      <p class='p-text'>👉 Developer Handoff</p>
      `,
  },
  {
    title: "Git",
    content: `
    <h2 class='work--subheading mb-2'>Git</h2>
    <p class='p-text'>👉 Repository</p>
    <p class='p-text'>👉 Commits</p>
      <p class='p-text'>👉 Branches</p>
      <p class='p-text'>👉 Pull requests</p>
      <p class='p-text'>👉 Merge conflicts</p>
      <p class='p-text'>👉 Remote repositories</p>
      <p class='p-text'>👉 Commands</p>
      <p class='p-text'>👉 Version control</p>
      `,
  },
  {
    title: "Github",
    content: `
    <h2 class='work--subheading mb-2'>Github</h2>
    <p class='p-text'>👉 Repositories</p>
    <p class='p-text'>👉 Issues</p>
      <p class='p-text'>👉 Pull requests</p>
      <p class='p-text'>👉 Branches</p>
      <p class='p-text'>👉 Forks</p>
      <p class='p-text'>👉 Collaborators</p>
      <p class='p-text'>👉 Releases</p>
      <p class='p-text'>👉 Markdown</p>
      <p class='p-text'>👉 Continuous integration</p>
      `,
  },
  {
    title: "Wordpress Theme Development",
    content: `
    <h2 class='work--subheading mb-2'>Wordpress Theme Development</h2>
    <p class='p-text'>👉 PHP fundamentals</p>
    <p class='p-text'>👉 MySQL fundamentals</p>
      <p class='p-text'>👉 Custom templates hierarchy</p>
      <p class='p-text'>👉 Custom post types</p>
      <p class='p-text'>👉 Custom taxonomies</p>
      <p class='p-text'>👉 Custom fields (including ACF and functions.php)</p>
      <p class='p-text'>👉 Custom menus</p>
      <p class='p-text'>👉 Custom widgets</p>
      <p class='p-text'>👉 Responsive design</p>
      <p class='p-text'>👉 Customizer options</p>
      <p class='p-text'>👉 Child themes modifying</p>
      <p class='p-text'>👉 Gutenberg</p>
      <p class='p-text'>👉 JSON theme</p>
      <p class='p-text'>👉 SEO-friendly</p>
      `,
  },
];

/////////// REVEAL ON SCROLL

// Observe the sections with the "left" and "right" classes
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      // Add the "show-left-right" class to the left and right sections
      entry.target.classList.add("show-left-right");

      // Stop observing the element after the animation has fired
      observer.unobserve(entry.target);
    }
  });
});

const hiddenSectionsLeft = document.querySelectorAll(".left");
hiddenSectionsLeft.forEach((el) => observer.observe(el));

const hiddenSectionsRight = document.querySelectorAll(".right");
hiddenSectionsRight.forEach((el) => observer.observe(el));
const hiddenSectionsBottom = document.querySelectorAll(".bottom");
hiddenSectionsBottom.forEach((el) => observer.observe(el));

// Observe the skill cards with the "skill-card" class
const observerSkillCards = new IntersectionObserver((entries) => {
  entries.forEach((entry, index) => {
    if (entry.isIntersecting) {
      // Calculate the delay based on the card's index
      const delay = index * 0.13;

      // Add the "visible" class to the skill card with the delay
      entry.target.style.transitionDelay = `${delay}s`;
      entry.target.classList.add("visible");

      // Stop observing the element after the animation has fired
      observerSkillCards.unobserve(entry.target);
    }
  });
});

const skillCards = document.querySelectorAll(".skill-card");
skillCards.forEach((skillCard) => observerSkillCards.observe(skillCard));

///// WHEN INPUT HAS ANY VALUE

const inputField = document.querySelectorAll(".input");
const label = document.querySelector(".contact-form__input label");
const textarea = document.querySelector(".contact-form__input textarea");

inputField.forEach((input) => {
  input.addEventListener("input", (e) => {
    if (e.target.value) {
      e.target.nextElementSibling.classList.add("focus-label-animation");
    } else {
      e.target.nextElementSibling.classList.remove("focus-label-animation");
    }
  });
});
