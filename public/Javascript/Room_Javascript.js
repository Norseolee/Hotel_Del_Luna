function bookTabs() {
    document.querySelectorAll(".select_view").forEach((button) => {
        button.addEventListener("click", () => {
            const ViewTab = button.parentElement;
            const TabsContainer = ViewTab.parentElement;
            const TabsViews = button.getAttribute("data-for-tab");
            const tabToActivate = TabsContainer.querySelector(
                `.select_room[data-tab="${TabsViews}"]`
            );

            ViewTab.querySelectorAll(".select_view").forEach((button) => {
                button.classList.remove("Tab-button-active");
            });

            TabsContainer.querySelectorAll(".select_room").forEach((tab) => {
                tab.classList.remove("Tab-content-active");
            });

            button.classList.add("Tab-button-active");
            tabToActivate.classList.add("Tab-content-active");
        });
    });
}

document.addEventListener("DOMContentLoaded", () => {
    bookTabs();

    document.querySelectorAll(".view").forEach((TabsContainer) => {
        TabsContainer.querySelector(".view .select_view").click();
    });
});

const datePicker = document.getElementById("datePicker");

const currentDate = new Date().toISOString().split("T")[0];

datePicker.setAttribute("min", currentDate);

datePicker.addEventListener("input", function () {
    if (this.value < currentDate) {
        this.value = currentDate;
    }
});
