$(document).ready(function () {
  renderTitleFlowColumn($("#animal-title"));
  console.log("ready!");

  handleToggleMenuOnMobile();

  handleToggleSearchForm();

  handlePaginate();

  checkActiveMenu();

  $(document).ready(function () {
    $(".slideshow").slick({
      autoplay: true,
      autoplaySpeed: 2000,
      infinity: true,
      dots: false,
      arrows: false,
    });
  });
});

function checkActiveMenu() {
  let currentUrl = window.location.href;
  if (window.location.search == "") {
    currentUrl = currentUrl.slice(0, -1);
  }
  $(".menu__content .menu__item a").each((index, item) => {
    handleAddClassActiveForMenu(".menu__item", item, currentUrl);
  });
  $(".hp-nav-bar .hp-nav-bar__item a").each((index, item) => {
    handleAddClassActiveForMenu(".hp-nav-bar__item", item, currentUrl);
  });
}

function handleAddClassActiveForMenu(parentsClass, item, currentUrl) {
  if ($(item).attr("href") == currentUrl) {
    $(item).closest(parentsClass).addClass("active");
  }

  if (
    window.location.search.includes("page_id") &&
    $(item).attr("href").includes("page_id") &&
    window.location.href.includes($(item).attr("href"))
  ) {
    $(item).closest(parentsClass).addClass("active");
  }
}

function handlePaginate() {
  if ($("#paginate-prev").length == 0) {
    $("button.prev").attr("disabled", true);
  }

  if ($("#paginate-next").length == 0) {
    $("button.next").attr("disabled", true);
  }
  handleClickPrevPaginate();
  handleClickNextPaginate();
}

function handleClickPrevPaginate() {
  $(document).on("click", "button.prev", function () {
    if ($("a.prev").length > 0) {
      const prevUrl = $("a.prev").attr("href");
      window.location.href = prevUrl;
    }
  });
}
function handleClickNextPaginate() {
  $(document).on("click", "button.next", function () {
    if ($("a.next").length > 0) {
      const nextUrl = $("a.next").attr("href");
      window.location.href = nextUrl;
    }
  });
}

function handleToggleSearchForm() {
  const boxSearchElement = $(".header-page__box-search");
  $(".btn-search").on("click", function () {
    if (boxSearchElement.attr("class").includes("d-none")) {
      boxSearchElement.removeClass("d-none");
      $(".blur").removeClass("d-none");
      $("input.input-search").focus();
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
      !$(e.target).attr("class")?.includes("btn-search") &&
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
      $(e.target)?.closest("#btn-toggle-menu-mobile").length > 0 ||
      $(e.target)?.attr("id")?.includes("btn-toggle-menu-mobile")
    ) {
      return;
    }

    if ($(e.target).attr("class") == "") {
      return;
    }
    const classCurrentElement =
      "." + $(e.target).attr("class")?.replaceAll(" ", ".");

    if (classCurrentElement === undefined) return;

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
      $("input.input-search").focus();
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
