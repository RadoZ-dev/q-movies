import { __ } from "@wordpress/i18n";
import { useBlockProps, PlainText } from "@wordpress/block-editor";
import "./editor.scss";

export default function Edit({ attributes, setAttributes }) {
	const { quote } = attributes;
	return (
		<div className="qm-favorite-movie-quote">
			<h3>Favorite Movie Quote</h3>

			<PlainText
				{...useBlockProps()}
				tagName="p"
				value={quote}
				onChange={(value) => setAttributes({ quote: value })}
			/>
		</div>
	);
}
