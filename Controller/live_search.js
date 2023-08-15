function search() {
  const input = document.getElementById("search");
  const filter = input.value.toLowerCase();
  const table = document.querySelector("table");
  const rows = table.getElementsByTagName("tr");

  for (let i = 1; i < rows.length; i++) {
    const name = rows[i].getElementsByTagName("td")[0];
    const testimonial = rows[i].getElementsByTagName("td")[1];
    const date = rows[i].getElementsByTagName("td")[2];

    if (name || testimonial || date) {
      const nameValue = name.textContent || name.innerText;
      const testimonialValue = testimonial.textContent || testimonial.innerText;
      const dateValue = date.textContent || date.innerText;

      if (
        nameValue.toLowerCase().indexOf(filter) > -1 ||
        testimonialValue.toLowerCase().indexOf(filter) > -1 ||
        dateValue.toLowerCase().indexOf(filter) > -1
      ) {
        rows[i].style.display = "";
      } else {
        rows[i].style.display = "none";
      }
    }
  }
}

function fetchTestimonials() {
  fetch("../Model/testimonials.php")
    .then((response) => response.json())
    .then((data) => {
      const tbody = document.querySelector("tbody");
      tbody.innerHTML = "";

      data.forEach((testimonial) => {
        const row = document.createElement("tr");
        row.innerHTML = `
                            <td>${testimonial.name}</td>
                            <td>${testimonial.testimonial}</td>
                            <td>${testimonial.submissionDate}</td>
                            <td>Edit|Delete</td>
                        `;
        tbody.appendChild(row);
      });
    })
    .catch((error) => console.error("Error fetching testimonials:", error));
}

// Call fetchTestimonials on page load
window.onload = fetchTestimonials;
