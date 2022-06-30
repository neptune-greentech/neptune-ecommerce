const
	path = require('path'),
	MiniCssExtractPlugin = require('mini-css-extract-plugin')

module.exports = {
	entry: './src/scripts/index.js',
	mode: 'production',
	output: {
		filename: './scripts/bundle.js',
		path: path.resolve('dist')
	},
	devtool: 'inline-source-map',
	module: {
		rules: [
			{
				test: /\.s(a|c)ss$/,
				use: [
					{
						loader: MiniCssExtractPlugin.loader,
						options: {
							publicPath: '../'
						}
					},
					'css-loader',
					'postcss-loader',
					'sass-loader'
				]
			},
			{
                test: /\.(jpg|png|svg|webp)$/,
                loader: 'file-loader',
                options: { name: '[name].[ext]', outputPath: 'images', publicPath: '' }
            },
            {
                test: /\.(eot|otf|ttf|woff|woff2)$/,
                loader: 'file-loader',
                options: { name: '[name].[ext]', outputPath: 'fonts' }
            }
		]
	},
	plugins: [
		new MiniCssExtractPlugin({
			filename: './styles/style.css'
		})
	]
}
