<?php

/* overall_footer.html */
class __TwigTemplate_5ba82a268e65499ff0dd537c82c44724b17295598bc88ef7cf43a2f1188e535a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "\t\t";
        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
        $this->env->setNamespaceLookUpOrder(array('spaceace_ajaxchat', '__main__'));
        $this->env->loadTemplate('@spaceace_ajaxchat/event/overall_footer_content_after.html')->display($context);
        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        // line 2
        echo "\t</div>

";
        // line 4
        // line 5
        echo "
<div id=\"page-footer\" role=\"contentinfo\">
\t";
        // line 7
        $location = "navbar_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("navbar_footer.html", "overall_footer.html", 7)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 8
        echo "
\t<div id=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 9
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t\t<div id=\"darken\">&nbsp;</div>
\t</div>

\t<div id=\"phpbb_alert\" class=\"phpbb_alert\" data-l-err=\"";
        // line 13
        echo $this->env->getExtension('phpbb')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t<a href=\"#\" class=\"alert_close\"></a>
\t\t<h3 class=\"alert_title\">&nbsp;</h3><p class=\"alert_text\"></p>
\t</div>
\t<div id=\"phpbb_confirm\" class=\"phpbb_alert\">
\t\t<a href=\"#\" class=\"alert_close\"></a>
\t\t<div class=\"alert_text\"></div>
\t</div>
</div>

</div><!-- /#inner-wrap -->
</div><!-- /#inner-grunge -->
</div><!-- /#wrap -->

<div class=\"copyright\">
\t";
        // line 28
        // line 29
        echo "    <br />
    <strong><span>*</span>SE Gamer Style by <a href=\"http://www.planetstyles.net\">Premium phpBB Styles</a></strong><br />
    <div style=\"text-align: center;\"><a href=\"http://www.planetstyles.net/\"><img src=\"";
        // line 31
        echo (isset($context["T_THEME_PATH"]) ? $context["T_THEME_PATH"] : null);
        echo "/images/credit_line.png\" width=\"140\" height=\"25\"/></a></div>
\t<br />";
        // line 32
        echo (isset($context["CREDIT_LINE"]) ? $context["CREDIT_LINE"] : null);
        echo "
\t";
        // line 33
        if ((isset($context["TRANSLATION_INFO"]) ? $context["TRANSLATION_INFO"] : null)) {
            echo "<br />";
            echo (isset($context["TRANSLATION_INFO"]) ? $context["TRANSLATION_INFO"] : null);
        }
        // line 34
        echo "\t";
        // line 35
        echo "\t";
        if ((isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null)) {
            echo "<br />";
            echo (isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null);
        }
        // line 36
        echo "\t";
        if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
            echo "<br /><strong><a href=\"";
            echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("ACP");
            echo "</a></strong>";
        }
        // line 37
        echo "</div>

<div>
\t<a id=\"bottom\" class=\"anchor\" accesskey=\"z\"></a>
\t";
        // line 41
        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
            echo (isset($context["RUN_CRON_TASK"]) ? $context["RUN_CRON_TASK"] : null);
        }
        // line 42
        echo "</div>

<script type=\"text/javascript\" src=\"";
        // line 44
        echo (isset($context["T_JQUERY_LINK"]) ? $context["T_JQUERY_LINK"] : null);
        echo "\"></script>
";
        // line 45
        if ((isset($context["S_ALLOW_CDN"]) ? $context["S_ALLOW_CDN"] : null)) {
            echo "<script type=\"text/javascript\">window.jQuery || document.write('\\x3Cscript src=\"";
            echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
            echo "/javascript/jquery.min.js?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\">\\x3C/script>');</script>";
        }
        // line 46
        echo "<script type=\"text/javascript\" src=\"";
        echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
        echo "/javascript/core.js?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\"></script>

";
        // line 48
        if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "COLLAPSIBLE_CATEGORIES", array()) == "yes")) {
            // line 49
            echo "    ";
            $asset_file = "jquery.collapse.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                $asset->add_assets_version('2');
                $asset_file = $asset->get_url();
                }
            }
            $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
            // line 50
            echo "    ";
            $asset_file = "jquery.collapse_storage.js";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                $asset->add_assets_version('2');
                $asset_file = $asset->get_url();
                }
            }
            $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        }
        // line 52
        $asset_file = "forum_fn.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('2');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 53
        $asset_file = "ajax.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('2');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 54
        echo "
";
        // line 55
        // line 56
        echo "
";
        // line 57
        if ((isset($context["S_PLUPLOAD"]) ? $context["S_PLUPLOAD"] : null)) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("plupload.html", "overall_footer.html", 57)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 58
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SCRIPTS", array());
        echo "

";
        // line 60
        // line 61
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 61,  244 => 60,  239 => 58,  225 => 57,  222 => 56,  221 => 55,  218 => 54,  203 => 53,  188 => 52,  171 => 50,  155 => 49,  153 => 48,  145 => 46,  137 => 45,  133 => 44,  129 => 42,  125 => 41,  119 => 37,  110 => 36,  104 => 35,  102 => 34,  97 => 33,  93 => 32,  89 => 31,  85 => 29,  84 => 28,  64 => 13,  49 => 9,  46 => 8,  34 => 7,  30 => 5,  29 => 4,  25 => 2,  19 => 1,);
    }
}
/* 		<!-- EVENT overall_footer_content_after -->*/
/* 	</div>*/
/* */
/* <!-- EVENT overall_footer_page_body_after -->*/
/* */
/* <div id="page-footer" role="contentinfo">*/
/* 	<!-- INCLUDE navbar_footer.html -->*/
/* */
/* 	<div id="darkenwrapper" data-ajax-error-title="{L_AJAX_ERROR_TITLE}" data-ajax-error-text="{L_AJAX_ERROR_TEXT}" data-ajax-error-text-abort="{L_AJAX_ERROR_TEXT_ABORT}" data-ajax-error-text-timeout="{L_AJAX_ERROR_TEXT_TIMEOUT}" data-ajax-error-text-parsererror="{L_AJAX_ERROR_TEXT_PARSERERROR}">*/
/* 		<div id="darken">&nbsp;</div>*/
/* 	</div>*/
/* */
/* 	<div id="phpbb_alert" class="phpbb_alert" data-l-err="{L_ERROR}" data-l-timeout-processing-req="{L_TIMEOUT_PROCESSING_REQ}">*/
/* 		<a href="#" class="alert_close"></a>*/
/* 		<h3 class="alert_title">&nbsp;</h3><p class="alert_text"></p>*/
/* 	</div>*/
/* 	<div id="phpbb_confirm" class="phpbb_alert">*/
/* 		<a href="#" class="alert_close"></a>*/
/* 		<div class="alert_text"></div>*/
/* 	</div>*/
/* </div>*/
/* */
/* </div><!-- /#inner-wrap -->*/
/* </div><!-- /#inner-grunge -->*/
/* </div><!-- /#wrap -->*/
/* */
/* <div class="copyright">*/
/* 	<!-- EVENT overall_footer_copyright_prepend -->*/
/*     <br />*/
/*     <strong><span>*</span>SE Gamer Style by <a href="http://www.planetstyles.net">Premium phpBB Styles</a></strong><br />*/
/*     <div style="text-align: center;"><a href="http://www.planetstyles.net/"><img src="{T_THEME_PATH}/images/credit_line.png" width="140" height="25"/></a></div>*/
/* 	<br />{CREDIT_LINE}*/
/* 	<!-- IF TRANSLATION_INFO --><br />{TRANSLATION_INFO}<!-- ENDIF -->*/
/* 	<!-- EVENT overall_footer_copyright_append -->*/
/* 	<!-- IF DEBUG_OUTPUT --><br />{DEBUG_OUTPUT}<!-- ENDIF -->*/
/* 	<!-- IF U_ACP --><br /><strong><a href="{U_ACP}">{L_ACP}</a></strong><!-- ENDIF -->*/
/* </div>*/
/* */
/* <div>*/
/* 	<a id="bottom" class="anchor" accesskey="z"></a>*/
/* 	<!-- IF not S_IS_BOT -->{RUN_CRON_TASK}<!-- ENDIF -->*/
/* </div>*/
/* */
/* <script type="text/javascript" src="{T_JQUERY_LINK}"></script>*/
/* <!-- IF S_ALLOW_CDN --><script type="text/javascript">window.jQuery || document.write('\x3Cscript src="{T_ASSETS_PATH}/javascript/jquery.min.js?assets_version={T_ASSETS_VERSION}">\x3C/script>');</script><!-- ENDIF -->*/
/* <script type="text/javascript" src="{T_ASSETS_PATH}/javascript/core.js?assets_version={T_ASSETS_VERSION}"></script>*/
/* */
/* <!-- IF $COLLAPSIBLE_CATEGORIES == 'yes' -->*/
/*     <!-- INCLUDEJS jquery.collapse.js -->*/
/*     <!-- INCLUDEJS jquery.collapse_storage.js -->*/
/* <!-- ENDIF -->*/
/* <!-- INCLUDEJS forum_fn.js -->*/
/* <!-- INCLUDEJS ajax.js -->*/
/* */
/* <!-- EVENT overall_footer_after -->*/
/* */
/* <!-- IF S_PLUPLOAD --><!-- INCLUDE plupload.html --><!-- ENDIF -->*/
/* {$SCRIPTS}*/
/* */
/* <!-- EVENT overall_footer_body_after -->*/
/* */
/* </body>*/
/* </html>*/
/* */
