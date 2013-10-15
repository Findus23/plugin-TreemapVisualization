<?php
/**
 * Piwik - Open source web analytics
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 * @category Piwik_Plugins
 * @package CoreVisualizations
 */

namespace Piwik\Plugins\TreemapVisualization;

use Piwik\ViewDataTable\Graph\Config as GraphConfig;

/**
 * DataTable Visualization that derives from HtmlTable and sets show_extra_columns to true.
 */
class TreemapConfig extends GraphConfig
{
    /**
     * Controls whether the treemap nodes should be colored based on the evolution percent of
     * individual metrics, or not. If false, the jqPlot pie graph's series colors are used to
     * randomly color different nodes.
     *
     * Default Value: true
     */
    public $show_evolution_values = true;

    public function __construct()
    {
        parent::__construct();

        $this->allow_multi_select_series_picker = false;

        $this->addPropertiesThatShouldBeAvailableClientSide(array(
            'filter_offset',
            'max_graph_elements',
            'show_evolution_values',
            'subtable_controller_action'
        ));
    }

}