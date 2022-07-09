//config.js
module.exports = {
  files: "**",
  from:'/\\d+\\.\\d+\\.\\d+/g',
  to:$npm_package_version
};
