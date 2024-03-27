$(document).ready(function () {
    // Initialize the laptop container with all laptop items
    $laptopContainer = $(".laptop-container");
    $allLaptops = $(".laptop-item");
    $laptopContainer.html($allLaptops);

    // Listen for changes on the checkbox filters
    $(".common_selector").change(function () {
        // Clear the current laptop container
        $laptopContainer.html("");

        // Gather the selected filters
        $selectedFilters = $(".common_selector:checked");

        // If no filter is selected, display all laptop items
        if ($selectedFilters.length === 0) {
            $laptopContainer.html($allLaptops);
            return;
        }

        // Filter the laptop items based on the selected filters
        $allLaptops.filter(function () {
            $laptop = $(this);
            let shouldShow = true;

            $selectedFilters.each(function () {
                $selectedFilter = $(this);

                // Check if the current laptop item matches the selected filter
                if ($laptop.hasClass($selectedFilter.val()) === false) {
                    shouldShow = false;
                    return false;
                }
            });

            // If the laptop item matches all selected filters, add it to the laptop container
            if (shouldShow) {
                $laptopContainer.append($laptop);
            }
        });
    });
});