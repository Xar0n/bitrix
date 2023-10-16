<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die(); ?>

<? if (!empty($arResult)): ?>
	<div class="footer-nav white-text">
		<nav>
			<ul>
				<?
				foreach ($arResult as $arItem):?>
					<li>
						<? if ($arItem["SELECTED"]): ?>
							<a href="<?= $arItem["LINK"] ?>">
								<?= $arItem["TEXT"] ?>
							</a>
						<? else: ?>
							<a href="<?= $arItem["LINK"] ?>">
								<?= $arItem["TEXT"] ?>
							</a>
						<? endif ?>
					</li>
				<? endforeach ?>
			</ul>
		</nav>
	</div>
<? endif ?>