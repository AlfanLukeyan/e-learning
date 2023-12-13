const urlParams = new URLSearchParams(window.location.search);
if (urlParams.has("user_id")) {
  window.localStorage.setItem("user_id", urlParams.get("user_id"));
} else {
  const user_id = window.localStorage.getItem("user_id");
  if (user_id != null) {
    if (window.location.search == "")
      window.location.search = "?user_id=" + user_id;
    else window.location.search += "&user_id=" + user_id;
  }
}

const logout = () => {
  window.localStorage.removeItem("user_id");
  window.location.replace("/");
};
