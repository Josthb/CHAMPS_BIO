const TAB_SELECTOR = ".tabs__toggle";
const CONTENT_SELECTOR = ".tabs__content";

let tabs = document.querySelectorAll(TAB_SELECTOR);
let contents = document.querySelectorAll(CONTENT_SELECTOR);

tabs.forEach((tab, index) => {
  tab.addEventListener("click", () => {
    contents.forEach((content) => {
      content.classList.remove("is-active");
    });
    tabs.forEach((tab) => {
      tab.classList.remove("is-active");
    });

    contents[index].classList.add("is-active");
    tabs[index].classList.add("is-active");

    // Ajouter la classe "abonnements-content" aux contenus de l'onglet des abonnements
    if (tab.dataset.tab === "4") {
      document.querySelectorAll(".abonnements-content").forEach((content) => {
        content.classList.add("abonnements-content");
      });
    } else {
      document.querySelectorAll(".abonnements-content").forEach((content) => {
        content.classList.remove("abonnements-content");
      });
    }
  });
});
