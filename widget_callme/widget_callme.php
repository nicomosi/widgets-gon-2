<?php

?>

	<link type="text/css" rel="stylesheet" href="<?php echo HOME_ROOT.'/widget_callme/widget_callme.css'; ?>" />
	<script type="text/javascript" src="<?php echo HOME_ROOT.'/widget_callme/widget_callme.js'; ?>" charset="UTF-8"></script>

	<div id="widget-callme" class="wc-ae">
		<div id="widget-dialog-bubble" class="wc-ae">

			<div id="widget-button" class="widget-text-content wc-ae">

				<a
						class=" wc-ae"
						onclick="
								ga('send', 'event', 'widget_llamada', 'click', '<?php echo $wg_phone['label']; ?>');
								ga('send', 'event', 'widget', 'click', 'llamada');

								gtag('event', 'click', {'event_category': 'widget_llamada', 'event_label': '<?php echo $wg_phone['label']; ?>'});
								gtag('event', 'click', {'event_category': 'widget', 'event_label': 'Llamada' });

								fbq('track', 'WidgetLlamada');
							"
						href="tel:<?php echo $wg_phone['phone']; ?>"
					>
					<p class="wc-ae"><strong>Atención Telefónica</strong></p>


					<img id="widget-icon" alt="" class="wc-ae" src="<?php echo HOME_ROOT.'/widget_callme/icono-atencion.png'; ?>">


					<!--<p>Atención Telefónica</p>-->
					<p
							class="widget-display-phone wc-ae"
							style="bottom: 0;"
							href="tel:<?php echo $wg_phone['phone']; ?>"
						>Llamar</p>
				</a>

			</div>

			<div id="widget-description" class="widget-text-content wc-ae" >
				<div id="widget-separator" class="wc-ae"></div>
				<!--<p class="wc-ae">¿Necesitás Asesoramiento?</p>-->
				<p class="wc-ae"><strong>Atención Telefónica</strong></p>

				<button
						class="wc-ae widget-display-phone"
						id="widget-display-phone"
						onclick="
								ga('send', 'event', 'widget_llamada', 'click', '<?php echo $wg_phone['label']; ?>');
								ga('send', 'event', 'widget', 'click', 'llamada');

								gtag('event', 'click', {'event_category': 'widget_llamada', 'event_label': '<?php echo $wg_phone['label']; ?>'});
								gtag('event', 'click', {'event_category': 'widget', 'event_label': 'Llamada' });

								fbq('track', 'WidgetLlamada');
							"
					>Ver Teléfono</button>
				<a class="widget-number wc-ae" href="tel:<?php echo $wg_phone['phone']; ?>"><?php echo $wg_phone['label']; ?></a>
			</div>

		</div>
		<div id="widget-triangle-bubble"></div>
	</div>