const cssnano = require("cssnano");
const purgecss = require("@fullhuman/postcss-purgecss")({
  content: ["./**/*.php"],
  css: ["max-w-15"],
  // Custom extractor for some Tailwind classes.
  defaultExtractor: content => content.match(/[A-Za-z0-9-_:/]+/g) || []
});

module.exports = {
  plugins: [
    require("postcss-import"),
    require("tailwindcss"),
    require("postcss-preset-env")({ stage: 1 }),
    require("autoprefixer"),
    ...(process.env.NODE_ENV === "production" ? [purgecss, cssnano] : [])
  ]
};
