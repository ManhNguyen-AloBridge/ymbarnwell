$(document).ready(function () {
  renderTitleFlowColumn($("#animal-title"));
  console.log("ready!");

  handleToggleMenuOnMobile();

  handleToggleSearchForm();
});

function handleToggleSearchForm() {
  const boxSearchElement = $(".header-page__box-search");
  $(".btn-search").on("click", function () {
    if (boxSearchElement.attr("class").includes("d-none")) {
      boxSearchElement.removeClass("d-none");
      $(".blur").removeClass("d-none");
    } else {
      boxSearchElement.addClass("d-none");
      $(".blur").addClass("d-none");
    }
  });

  $(document).on("click", function (e) {
    if ($(e.target).closest(".header-page__box-search").length > 0) {
      return;
    }

    if (
      $(e.target).closest(".header-page__box-search").length == 0 &&
      !$(e.target).attr("class").includes("btn-search") &&
      $(e.target).closest(".btn-search").length == 0
    ) {
      boxSearchElement.addClass("d-none");
      $(".blur").addClass("d-none");
    }
  });
}

function handleToggleMenuOnMobile() {
  const elementMenuMobile = $(".header-page__menu");

  $(document).on("click", function (e) {
    if (
      $(e.target)?.closest(".btn-toggle-menu-mobile").length > 0 ||
      $(e.target)?.attr("id")?.includes("btn-toggle-menu-mobile")
    ) {
      return;
    }

    if ($(e.target).attr("class") == "") {
      return;
    }
    const classCurrentElement =
      "." + $(e.target).attr("class").replaceAll(" ", ".");

    if (
      $(".header-page__menu").find(`${classCurrentElement}`).length == 0 &&
      classCurrentElement != ".header-page__menu" &&
      elementMenuMobile.attr("class").includes("show")
    ) {
      elementMenuMobile.removeClass("show");
      elementMenuMobile.addClass("hide");
    }
  });

  $("#btn-toggle-menu-mobile").on("click", function () {
    if (elementMenuMobile.attr("class").includes("hide")) {
      elementMenuMobile.removeClass("hide");
      elementMenuMobile.addClass("show");
    }
  });
}

function renderTitleFlowColumn(element) {
  let string = "";
  string += `<span class="title-old">${element.text()}</span>`;
  element
    .text()
    .split("")
    .forEach((item, index) => {
      string += `<span class="title-item">${item}</span>`;
    });
  element.text("");
  element.append(string);
}
