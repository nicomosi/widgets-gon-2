
	<link type="text/css" rel="stylesheet" href="<?php echo HOME_ROOT.'/widget_whatsapp/widget_whatsapp.css'; ?>" />
	<script type="text/javascript" src="<?php echo HOME_ROOT.'/widget_whatsapp/widget_whatsapp.js'; ?>" charset="UTF-8"></script>

	<div id="widget-whatsapp" class="wc-ae active">
		<div id="widget-dialog-bubble" class="wc-ae">

			<div id="widget-button" class="widget-text-content wc-ae">

				<a
					class=" wc-ae hidden-xs"
					onclick="
							ga('send', 'event', 'widget', 'click', 'Whatsapp');
							ga('send', 'event', 'widget_whatsapp', 'click', '<?php echo $wg_celular['phone']; ?>');

							gtag('event', 'click', {'event_category': 'widget', 'event_label': 'WhatsApp' });
							gtag('event', 'click', {'event_category': 'widget_whatsapp', 'event_label': '<?php echo $wg_celular['phone'];  ?>'});

							fbq('track', 'WidgetWhatsapp');
						"
					href="https://web.whatsapp.com/send?phone=<?php echo $wg_celular['phone'];  ?>&text=Hola! Me contacto a través de la web para realizar una consulta."
					target="blank"
					>
					<p class="wc-ae"><strong>Whatsapp</strong></p>


					<img id="widget-icon" alt="" class="wc-ae" src="<?php echo HOME_ROOT.'/widget_whatsapp/icono-whatsapp.png'; ?>">


					<!--<p>Atención Telefónica</p>-->
					<p
							class="widget-display-phone wc-ae"
							style="bottom: 0;"
							href="tel:<?php echo $$wg_celular['phone']; ?>"
						>Chat</p>
				</a>

				<a
					class=" wc-ae visible-xs"
					onclick="
							ga('send', 'event', 'widget', 'click', 'Whatsapp');
							ga('send', 'event', 'widget_whatsapp', 'click', '<?php echo $wg_celular['phone']; ?>');

							gtag('event', 'click', {'event_category': 'widget', 'event_label': 'WhatsApp' });
							gtag('event', 'click', {'event_category': 'widget_whatsapp', 'event_label': '<?php echo $wg_celular['phone'];  ?>'});

							fbq('track', 'WidgetWhatsapp');
						"
					href="https://api.whatsapp.com/send?phone=<?php echo $wg_celular['phone']; ?>&text=Hola! Me contacto a través de la web para realizar una consulta."
					target="blank"
					>
					<img id="widget-icon" alt="" class="wc-ae" src="<?php echo HOME_ROOT.'/widget_whatsapp/icono-whatsapp.png'; ?>">
				</a>


			</div>

			<?php /**/ ?>

			<div id="widget-description" class="widget-text-content wc-ae" >
				<div id="widget-separator" class="wc-ae"></div>
				<!--<p class="wc-ae">¿Necesitás Asesoramiento?</p>-->
				<p class="wc-ae"><strong>Chat Whatsapp</strong></p>

				<a
						class=" wc-ae widget-display-phone visible-lg visible-md"
						onclick="
								ga('send', 'event', 'widget', 'click', 'Whatsapp');
								ga('send', 'event', 'widget_whatsapp', 'click', '<?php echo $wg_celular['phone']; ?>');

								gtag('event', 'click', {'event_category': 'widget', 'event_label': 'WhatsApp' });
								gtag('event', 'click', {'event_category': 'widget_whatsapp', 'event_label': '<?php echo $wg_celular['phone'];  ?>'});

								fbq('track', 'WidgetWhatsapp');
							"
						href="https://web.whatsapp.com/send?phone=<?php echo $wg_celular['phone'];  ?>&text=Hola! Me contacto a través de la web para realizar una consulta."
						target="blank"
					>Enviar Mensaje</a>

				<a
						class=" wc-ae widget-display-phone visible-sm visible-xs"
						onclick="
								ga('send', 'event', 'widget', 'click', 'Whatsapp');
								ga('send', 'event', 'widget_whatsapp', 'click', '<?php echo $wg_celular['phone']; ?>');

								gtag('event', 'click', {'event_category': 'widget', 'event_label': 'WhatsApp' });
								gtag('event', 'click', {'event_category': 'widget_whatsapp', 'event_label': '<?php echo $wg_celular['phone'];  ?>'});

								fbq('track', 'WidgetWhatsapp');
							"
						href="https://api.whatsapp.com/send?phone=<?php echo $wg_celular['phone'];  ?>&text=Hola! Me contacto a través de la web para realizar una consulta."
						target="blank"
					>Enviar Mensaje</a>
			</div>

			<?php /**/ ?>


		</div>
		<div id="widget-triangle-bubble"></div>
	</div>