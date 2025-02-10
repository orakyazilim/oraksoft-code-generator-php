const Item = ({ url, img, title }) => `
  <a href="${url}" class="list-group-item">
    <div class="image">
      <img src="${img}" />
    </div>
    <p class="list-group-item-text">${title}</p>
  </a>
`;

