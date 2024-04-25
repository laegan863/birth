<script src="{{asset('simplemaps/mapdata.js')}}" async></script>
<script src="{{asset('simplemaps/usmap.js')}}" async></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<script>
    const currentYear = new Date().getFullYear();
    const startYear = 2023;
    const yearRange = startYear + "-" + currentYear;
    document.getElementById("inclusive-year").textContent = yearRange;
</script>

<script>
    var year = new Date().getFullYear();
    var numberOfYears = 118;

    var endYear = year - numberOfYears;

    var yearSelect = document.getElementById('year-of-death');

    for (var year = year; year >= endYear; year--) {
        var option = document.createElement('option');
        option.value = year;
        option.textContent = year;
        yearSelect.appendChild(option);
    }

    yearSelect.selectedIndex = 0;
</script>

<script>
    var year = new Date().getFullYear();
    var numberOfYears = 118;

    var endYear = year - numberOfYears;

    var yearSelect = document.getElementById('year-of-birth');

    for (var year = year; year >= endYear; year--) {
        var option = document.createElement('option');
        option.value = year;
        option.textContent = year;
        yearSelect.appendChild(option);
    }

    yearSelect.selectedIndex = 0;
</script>