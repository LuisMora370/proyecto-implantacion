document.addEventListener("DOMContentLoaded", function () {
  const links = document.querySelectorAll(".nav-bar .link");
  const contentContainer = document.querySelector(".content-container");

  // Cargar contenido desde localStorage si existe
  const lastUrl = localStorage.getItem("lastUrl");
  if (lastUrl) {
    loadContent(lastUrl);
  }

  links.forEach(link => {
    link.addEventListener("click", function (event) {
      event.preventDefault(); // Evita la navegación normal
      const href = this.getAttribute("href");

      if (href) {
        localStorage.setItem("lastUrl", href); // Guardar la última URL accedida
        loadContent(href);
      }
    });
  });

  function loadContent(url) {
    fetch(url)
      .then(response => {
        if (!response.ok) {
          throw new Error("Error al cargar el contenido");
        }
        return response.text();
      })
      .then(html => {
        // Extrae solo el contenido del <body>
        const parser = new DOMParser();
        const doc = parser.parseFromString(html, "text/html");
        const bodyContent = doc.body.innerHTML;
        contentContainer.innerHTML = bodyContent;
      })
      .catch(error => {
        contentContainer.innerHTML = `<p>Error al cargar el contenido: ${error.message}</p>`;
      });
  }
});
