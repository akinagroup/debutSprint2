<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_630663cbc86e81703300c71612c5cfff37b51ac24a8bc4000982df72c28bc88a extends Twig_Template
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
        $__internal_f0fb7034b65b531134e4da0bab34db8645a1e743bd95cfaa69268f2ae837e9ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0fb7034b65b531134e4da0bab34db8645a1e743bd95cfaa69268f2ae837e9ab->enter($__internal_f0fb7034b65b531134e4da0bab34db8645a1e743bd95cfaa69268f2ae837e9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_c81254aa654f58373714dffda99afe65c84ed030867274c846e39d1979c94d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c81254aa654f58373714dffda99afe65c84ed030867274c846e39d1979c94d2f->enter($__internal_c81254aa654f58373714dffda99afe65c84ed030867274c846e39d1979c94d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_f0fb7034b65b531134e4da0bab34db8645a1e743bd95cfaa69268f2ae837e9ab->leave($__internal_f0fb7034b65b531134e4da0bab34db8645a1e743bd95cfaa69268f2ae837e9ab_prof);

        
        $__internal_c81254aa654f58373714dffda99afe65c84ed030867274c846e39d1979c94d2f->leave($__internal_c81254aa654f58373714dffda99afe65c84ed030867274c846e39d1979c94d2f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
