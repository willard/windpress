import resolve from '@rollup/plugin-node-resolve';
import postcss from 'rollup-plugin-postcss';
import postcssImport from 'postcss-import';
import tailwindcss from 'tailwindcss';
import autoprefixer from 'autoprefixer';
import postcssNested from 'postcss-nested';
import postcssUrl from 'postcss-url';
import assets from 'postcss-assets';

export default {
    input: {
        main:'src/index.js',
    },
    output: {
        dir: 'dist/',
        format: 'esm'
    },
    plugins: [
        resolve({
            browser: true,
            extensions: ['.js']
        }),
        postcss({
            plugins: [
                tailwindcss(),
                autoprefixer(),
                postcssImport(),
                postcssNested(),
                postcssUrl(),
                assets({
                    loadPaths: ['**'],
                    baseUrl: '/wp-content/themes/windpress'
                })
            ],
            sourceMap: true,
            modules: false,
            extract: true,
        }),
    ]
  };