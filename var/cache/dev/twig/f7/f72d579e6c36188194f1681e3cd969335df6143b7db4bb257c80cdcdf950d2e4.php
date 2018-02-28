<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_823326ac2e56b67871efb74b98ba64a8926fc97a86be2a0267378bb8f91fa7ab extends Twig_Template
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
        $__internal_867963d37e18e0130449490cba919a9b699dc6c2bef718af5fff8b486f27148c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_867963d37e18e0130449490cba919a9b699dc6c2bef718af5fff8b486f27148c->enter($__internal_867963d37e18e0130449490cba919a9b699dc6c2bef718af5fff8b486f27148c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_f0dd4eaefd16e2ad0ba36983179029f6edbf287e73d1e55a5117bdc7745303ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0dd4eaefd16e2ad0ba36983179029f6edbf287e73d1e55a5117bdc7745303ae->enter($__internal_f0dd4eaefd16e2ad0ba36983179029f6edbf287e73d1e55a5117bdc7745303ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_867963d37e18e0130449490cba919a9b699dc6c2bef718af5fff8b486f27148c->leave($__internal_867963d37e18e0130449490cba919a9b699dc6c2bef718af5fff8b486f27148c_prof);

        
        $__internal_f0dd4eaefd16e2ad0ba36983179029f6edbf287e73d1e55a5117bdc7745303ae->leave($__internal_f0dd4eaefd16e2ad0ba36983179029f6edbf287e73d1e55a5117bdc7745303ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
